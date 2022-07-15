<?php

namespace App\Http\Livewire\Pages\Icon\Webinar\Admin\Feedback\Components;

use App\Models\Icon\IconWebinarKickOffFeedback;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDetail extends ModalComponent
{
    public $feedback;

    public function mount($id){
        $this->feedback = IconWebinarKickOffFeedback::find($id);
    }

    public function render()
    {
        return view('livewire.pages.icon.webinar.admin.feedback.components.modal-detail');
    }
}
