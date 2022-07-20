<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\VerifikasiDp\Components;

use App\Models\Bionix\BionixInvoice;
use Livewire\Component;

class ModalDetail extends Component
{
    public $payment_proof;

    public function mount($id){
        $this->payment_proof = BionixInvoice::find($id)->payment_proof;
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.verifikasi-dp.components.modal-detail');
    }
}
