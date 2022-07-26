<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\VerifikasiDp\Components;

use App\Models\Bionix\BionixInvoice;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDetail extends ModalComponent
{
    public $bionix_data;

    public function mount($id){
        $this->bionix_data = BionixInvoice::find($id);
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.verifikasi-dp.components.modal-detail');
    }
}
