<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\VerifikasiSeleksi\Components;

use App\Models\Icon\IconAcademyDataScienceData;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

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
        } elseif ($this->type == 'accept') {
            $this->team->update([
                'competition_round' => 'Pending'
            ]);
        }
        $this->emit('refreshLivewireDatatable');
        $this->forceClose()->closeModal();
    }
}
