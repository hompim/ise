<?php

namespace App\Http\Livewire\Pages\Icon\Talkshow\Admin\Peserta\Components;

use App\Models\Icon\IconGrandTalkshow;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDetail extends ModalComponent
{
    public $talkshow;

    public function render()
    {
        return view('livewire.pages.icon.talkshow.admin.peserta.components.modal-detail');
    }

    public function mount($id)
    {
        $this->talkshow = IconGrandTalkshow::find($id);
    }

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }
}
