<?php

namespace App\Http\Livewire\Pages\Admin\ShortenLink\Components;

use App\Models\ShortenLink;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDelete extends ModalComponent
{
    public $link;

    public function mount($id){
        $this->link = ShortenLink::find($id);
    }

    public function delete(){
        $this->link->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.admin.shorten-link.components.modal-delete');
    }
}
