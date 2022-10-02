<?php

namespace App\Http\Livewire\Pages\Landing\EHall\Quiz;

use App\Models\Icon\EhallQuestType;
use Livewire\Component;

class QuizPage extends Component
{
    public $type_id;

    public function render()
    {
        return view('livewire.pages.landing.e-hall.quiz.quiz-page')->layout('layouts.landing');
    }

    public function mount($quizType)
    {
        $this->type_id = $quizType;
    }
}
