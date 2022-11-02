<?php

namespace App\Http\Livewire\Pages\Icon\Ehall\Admin\Challage\Components;

use App\Models\Icon\EhallChallage;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDetail extends ModalComponent
{
    public $challenge;

    public function render()
    {
        return view('livewire.pages.icon.ehall.admin.challage.components.modal-detail');
    }

    public function mount($id)
    {
        $this->id = $id;
        $this->challenge= EhallChallage::find($id);
    }
}
