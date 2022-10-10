<?php

namespace App\Http\Livewire\Pages\Bionix\Peserta\Tugas;

use App\Models\Bionix\BionixSubmission;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class TaskCard extends Component
{
    use WithFileUploads;

    public $fileTask;
    public $linkTask;
    public $type;
    public $submission_type;

    public function render()
    {
        return view('livewire.pages.bionix.peserta.tugas.task-card');
    }

    public function mount($type, $for)
    {
        $this->type = $type;
        $this->submission_type = $for;
    }

    public function submitTask()
    {
        if ($this->type == 'file') {
            $this->validate([
                'fileTask' => 'required|mimes:pdf,zip,rar'
            ]);
        } else {
            $this->validate([
                'linkTask' => 'required'
            ]);
        }

        // if ($this->task->deadline < Carbon::now()) {
        //     $this->emit('alreadyDeadline');
        //     return;
        // }

        $this->emit('onUpload');
        if ($this->type == 'file') {
            if (!is_string($this->fileTask)) {
                $name = date('YmdHis') . '_BIONIX SUBMISSION_' . Auth::user()->userable->bionix->team_name . '.' . $this->fileTask->getClientOriginalExtension();
                $this->fileTask->storeAs('jawaban_tugas_bionix', $name, 'public');
                $path = 'jawaban_tugas_bionix/' . $name;

                BionixSubmission::create([
                    'team_id' => Auth::user()->userable->bionix->id,
                    'team_type' => Auth::user()->userable->bionix_type,
                    'file_path' => $path,
                    'submission_type' => $this->submission_type,
                ]);
            }
        } else {

            BionixSubmission::create([
                'team_id' => Auth::user()->userable->bionix->id,
                'team_type' => Auth::user()->userable->bionix_type,
                'video_link' => $this->linkTask,
                'submission_type' => $this->submission_type
            ]);
        }

        $this->emit('successUpload');
        return redirect(request()->header('Referer'));
    }
}
