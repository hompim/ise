<?php

namespace App\Http\Livewire\Pages\Admin\ShortenLink\Components;

use App\Models\ShortenLink;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDetail extends ModalComponent
{
    public $shorten_link;

    public function render()
    {
        return view('livewire.pages.admin.shorten-link.components.modal-detail');
    }

    public function mount($id){
        $this->shorten_link = ShortenLink::find($id);
    }
}
