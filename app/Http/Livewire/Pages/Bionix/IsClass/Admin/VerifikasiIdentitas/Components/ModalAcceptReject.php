<?php

namespace App\Http\Livewire\Pages\Bionix\IsClass\Admin\VerifikasiIdentitas\Components;

use App\Models\Bionix\IsClassData;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalAcceptReject extends ModalComponent
{

    public $is_class_data;
    public $comment='';

    public function render()
    {
        return view('livewire.pages.bionix.is-class.admin.verifikasi-identitas.components.modal-accept-reject');
    }

    public function mount($id, $modal_type)
    {
        $this->type = $modal_type;
        $this->is_class_data = IsClassData::find($id);
    }

    public function submit()
    {
        if ($this->type == 'reject') {
            $this->is_class_data->update([
                'profile_verif_status' => 'Ditolak',
                'profile_verif_comment'=>$this->comment
            ]);
        } elseif ($this->type == 'accept') {
            $this->is_class_data->update([
                'profile_verif_status' => 'Terverifikasi'
            ]);
        }
        $this->emit('refreshLivewireDatatable');
        $this->forceClose()->closeModal();
    }
}
