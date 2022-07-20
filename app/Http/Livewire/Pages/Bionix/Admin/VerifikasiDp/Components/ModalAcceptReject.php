<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\VerifikasiDp\Components;

use App\Models\Bionix\BionixInvoice;
use Livewire\Component;

class ModalAcceptReject extends Component
{

    public $type;
    public $bionix_data;

    public function mount($modal_type, $type, $id)
    {
        $this->type = $modal_type;
        $this->bionix_data = BionixInvoice::find($id);
    }

    public function submit()
    {
        if ($this->type == 'reject') {
            $this->bionix_data->update([
               'status' => 'Ditolak'
            ]);
        } elseif ($this->type == 'accept') {
            $this->bionix_data->update([
                'status' => 'Terverifikasi'
            ]);
        }
        $this->emit('refreshLivewireDatatable');
        $this->forceClose()->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.verifikasi-dp.components.modal-accept-reject');
    }
}
