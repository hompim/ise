<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\VerifikasiSeleksi\Components;

use Livewire\Component;
use App\Mail\IconSeleksiEmail;
use App\Mail\LolosAcademyEmail;
use App\Mail\TidakLolosAcademyEmail;
use Illuminate\Support\Facades\Mail;
use LivewireUI\Modal\ModalComponent;
use App\Models\Icon\IconAcademyDataScienceData;

class ModalAcceptRejectl extends ModalComponent
{
    public $type, $team;

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.verifikasi-seleksi.components.modal-accept-rejectl');
    }

    public function mount($type, $id)
    {
        $this->type = $type;
        $this->team = IconAcademyDataScienceData::find($id);
    }

    public function submit()
    {
        if ($this->type == 'reject') {
            $this->team->update([
                'competition_round' => 'Rejected',
            ]);
            Mail::to($this->team->leader->email)->send(new TidakLolosAcademyEmail($this->team->leader->name));
        } elseif ($this->type == 'accept') {
            $this->team->update([
                'competition_round' => 'Pending'
            ]);
            Mail::to($this->team->leader->email)->send(new LolosAcademyEmail($this->team->leader->name));
        }
        $this->emit('refreshLivewireDatatable');
        $this->forceClose()->closeModal();
    }
}
