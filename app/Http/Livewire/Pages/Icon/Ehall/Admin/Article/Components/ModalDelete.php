<?php

namespace App\Http\Livewire\Pages\Icon\Ehall\Admin\Article\Components;

use App\Models\Icon\EhallArticle;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDelete extends ModalComponent
{
    public $artikel;

    public function mount($id){
        $this->artikel = EhallArticle::find($id);
    }

    public function delete(){
        $this->artikel->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.ehall.admin.article.components.modal-delete');
    }
}
