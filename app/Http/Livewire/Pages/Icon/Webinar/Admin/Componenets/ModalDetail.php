<?php

namespace App\Http\Livewire\Pages\Icon\Webinar\Admin\Componenets;

use App\Models\Icon\IconWebinarKickOff;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDetail extends ModalComponent
{
    public $webinar;

    public function render()
    {
        return view('livewire.pages.icon.webinar.admin.componenets.modal-detail');
    }

    public function mount($id)
    {
        $this->webinar = IconWebinarKickOff::find($id);
    }

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }
}
