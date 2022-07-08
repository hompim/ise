<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\VerifikasiIdentitas\Components;

use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamSeniorData;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalAcceptReject extends ModalComponent
{
    public $type;
    public $bionix_data;
    public $comment='';
    public function mount($modal_type, $type, $id)
    {
        $this->type = $modal_type;
        $this->bionix_data = ($type == 'student' ? TeamJuniorData::find($id) : TeamSeniorData::find($id));
    }

    public function submit()
    {
        if ($this->type == 'reject') {
            $this->bionix_data->update([
                'profile_verif_status' => 'Ditolak',
                'profile_verif_comment'=>$this->comment
            ]);
        } elseif ($this->type == 'accept') {
            $this->bionix_data->update([
                'profile_verif_status' => 'Terverifikasi'
            ]);
        }
        $this->emit('refreshLivewireDatatable');
        $this->forceClose()->closeModal();
    }


    public function render()
    {
        return view('livewire.pages.bionix.admin.verifikasi-identitas.components.modal-accept-reject');
    }
}
