<?php

namespace App\Http\Livewire\Pages\Icon\Ehall\Admin\Quiz\Components;

use App\Models\Icon\EhallQuestQuiz;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDelete extends ModalComponent
{

    public $quiz;

    public function mount($id){
        $this->quiz = EhallQuestQuiz::find($id);
    }

    public function delete(){
        $this->quiz->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.ehall.admin.quiz.components.modal-delete');
    }
}
