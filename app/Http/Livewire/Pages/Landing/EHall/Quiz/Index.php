<?php

namespace App\Http\Livewire\Pages\Landing\EHall\Quiz;

use App\Models\Icon\EhallQuestType;
use Livewire\Component;

class Index extends Component
{
    public $type_quiz;

    public function render()
    {
        return view('livewire.pages.landing.e-hall.quiz.index')->layout('layouts.landing');
    }

    public function mount()
    {
        $this->type_quiz = EhallQuestType::all();
    }
}
