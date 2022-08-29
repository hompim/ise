<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Peserta;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Seleksi extends Component
{
    use WithFileUploads;

    public $task;
    public $submission;
    public $fileTask;
    public $taskSubmit;
    public $message, $messageType;
    public $isUpload = false;
    public $isSubmit;

    protected $listeners = ['successUpload', 'onUpload', 'alreadyDeadline', 'getTask'];


    public function render()
    {
        return view('livewire.pages.icon.academy.peserta.seleksi')->layout('layouts.dashboard');
    }

    public function mount(){
        $this->isSubmit = Auth::user()->userable->academy->jawabab_seleksi_path != Null ? true : false;
    }

    public function alreadyDeadline()
    {
        $this->message = 'Tugas sudah melewati masa deadline';
        $this->messageType = 'red';
    }

    public function onUpload()
    {
        $this->message = 'Jawaban anda sedang diunggah';
        $this->messageType = 'blue';
    }

    public function successUpload()
    {
        $this->message = 'Jawaban berhasil diunggah';
        $this->messageType = 'green';
    }

    public function closeMessage()
    {
        $this->resetErrorBag();
        $this->message = null;
        $this->messageType = null;
    }

    public function updatedFileTask()
    {
        $this->validate([
            'fileTask' => 'required|max:10240|mimes:pdf,zip,rar'
        ]);

        // if ($this->task->deadline < Carbon::now()) {
        //     $this->emit('alreadyDeadline');
        //     return;
        // }

        $this->emit('onUpload');
        if (!is_string($this->fileTask)) {
            $name = date('YmdHis') . '_DS ACADEMY_SELEKSI_' . Auth::user()->userable->academy->team_name . '.' . $this->fileTask->getClientOriginalExtension();
            $this->fileTask->storeAs('jawaban_tugas_icon', $name, 'public');
            $path = 'jawaban_tugas_icon/' . $name;

            Auth::user()->userable->academy->update([
                'jawaban_seleksi_path' => $path
            ]);
        }

        $this->emit('successUpload');
    }
}
