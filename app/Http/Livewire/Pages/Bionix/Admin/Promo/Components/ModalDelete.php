<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Promo\Components;

use App\Models\Bionix\PromoCode;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDelete extends ModalComponent
{
    public $promo;

    public function mount($id){
        $this->promo = PromoCode::find($id);
    }

    public function delete(){
        $this->promo->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.promo.components.modal-delete');
    }
}
