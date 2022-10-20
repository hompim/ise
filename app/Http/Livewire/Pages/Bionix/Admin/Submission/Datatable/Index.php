<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Submission\Datatable;

use App\Models\Bionix\BionixSubmission;
use Illuminate\Support\Facades\Storage;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use ZanySoft\Zip\Zip;

class Index extends LivewireDatatable
{
    public $type;
    public function builder()
    {
        if (strpos($this->params, 'Senior') !== false) {
            return BionixSubmission::where('submission_type', $this->params)
                ->where('team_type', 'App\Models\Bionix\TeamSeniorData')
                ->whereRaw('bionix_submissions.id in (select max(bionix_submissions.id) from bionix_submissions group by team_id)')
                ->join('team_senior_data as team', 'team.id', 'bionix_submissions.team_id');
        }
        if (strpos($this->params, 'Junior') !== false) {
            if ($this->type == 'file') {
                return BionixSubmission::where('submission_type', $this->params)
                    ->where('team_type', 'App\Models\Bionix\TeamJuniorData')
                    ->whereRaw('bionix_submissions.id in (select max(bionix_submissions.id) from bionix_submissions where file_path is not null group by team_id)')
                    ->whereNotNull('file_path')
                    ->join('team_junior_data as team', 'team.id', 'bionix_submissions.team_id');
            } elseif ($this->type == 'video') {
                return BionixSubmission::where('submission_type', $this->params)
                    ->where('team_type', 'App\Models\Bionix\TeamJuniorData')
                    ->whereNotNull('video_link')
                    ->whereRaw('bionix_submissions.id in (select max(bionix_submissions.id) from bionix_submissions where video_link is not null group by team_id)')
                    ->join('team_junior_data as team', 'team.id', 'bionix_submissions.team_id');
            }
        }
        return null;
    }

    public function columns()
    {
        $columns = [
            Column::checkbox(),
            DateColumn::raw('bionix_submissions.updated_at')
                ->label('Waktu Unggah')
                ->format('d M Y H:i:s')
                ->defaultSort('desc'),
            Column::raw('team.team_name')->label('Nama Tim')->searchable()

        ];

        if (strpos($this->params, 'Senior') !== false) {
            $columns = array_merge($columns, [Column::callback(['file_path'], function ($file_path) {
                return view('livewire.pages.bionix.admin.submission.components.datatable-action', ['type' => 'file', 'file_path' => $file_path]);
            })]);
        } else {
            if ($this->type == "video") {
                $columns = array_merge($columns, [Column::raw('video_link')->label('Link Youtube')]);
                $columns = array_merge($columns, [Column::callback(['video_link'], function ($video_link) {
                    return view('livewire.pages.bionix.admin.submission.components.datatable-action', ['type' => 'video', 'video_link' => $video_link]);
                })]);
            } elseif ($this->type == "file") {
                $columns = array_merge($columns, [Column::callback(['file_path'], function ($file_path) {
                    return view('livewire.pages.bionix.admin.submission.components.datatable-action', ['type' => 'file', 'file_path' => $file_path]);
                })]);
            }
        }

        return $columns;
    }

    public function downloadAll()
    {
        if (sizeof($this->selected) < 1) {
            return $this->isDownloadError = true;
        }
        $this->isDownloadError = false;
        Storage::disk('public')->makeDirectory('zip_dir');
        $zip_path = 'zip_dir/' . date('YmdHis') . '_BIONIX ' . str_replace((strpos($this->params, 'Senior') !== false) ? 'Senior' : 'Junior', (strpos($this->params, 'Senior') !== false) ? 'College' : 'Student', $this->params) . '.zip';
        $zip = Zip::create(Storage::disk('public')->path($zip_path));
        foreach ($this->selected as $selected) {
            $submission = BionixSubmission::find($selected);
            $zip->add(Storage::disk('public')->path($submission->file_path));
        }
        $zip->close();
        $this->emit('downloadUrl', asset('storage/' . $zip_path));
    }
}
