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

    public function render()
    {
        return view('livewire.pages.bionix.peserta.tugas.task-card');
    }

    public function mount($type){
        $this->type = $type;
    }

     public function submitTask()
    {
        if($this->type == 'file'){
            $this->validate([
                'fileTask' => 'required|max:10240|mimes:pdf,zip,rar'
            ]);
        }else{
            $this->validate([
                'linkTask' => 'required'
            ]);
        }

        // if ($this->task->deadline < Carbon::now()) {
        //     $this->emit('alreadyDeadline');
        //     return;
        // }

        $this->emit('onUpload');
        if($this->type == 'file'){
            if (!is_string($this->fileTask)) {
                $name = date('YmdHis') . '_BIONIX SUBMISSION_' . Auth::user()->userable->bionix->team_name . '.' . $this->fileTask->getClientOriginalExtension();
                $this->fileTask->storeAs('jawaban_tugas_bionix', $name, 'public');
                $path = 'jawaban_tugas_bionix/' . $name;


                if(Auth::user()->userable->bionix->submission){
                    Auth::user()->userable->bionix->submission->update([
                        'file_path' => $path,
                    ]);
                }else{
                    BionixSubmission::create([
                        'team_id' => Auth::user()->userable->bionix->id,
                        'team_type' => Auth::user()->userable->bionix_type,
                        'file_path' => $path,
                        'submission_type' => "Junior Semifinal"
                    ]);
                }
            }
        }else{
            if(Auth::user()->userable->bionix->submission){
                Auth::user()->userable->bionix->submission->update([
                    'video_link' => $this->linkTask,
                ]);
            }else{
            BionixSubmission::create([
                'team_id' => Auth::user()->userable->bionix->id,
                'team_type' => Auth::user()->userable->bionix_type,
                'video_link' => $this->linkTask,
                'submission_type' => "Junior Semifinal"
            ]);
        }
        }

        $this->emit('successUpload');
        return redirect(request()->header('Referer'));
    }

}
