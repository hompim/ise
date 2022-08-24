<?php

namespace App\Http\Livewire\Pages\Landing\EHall\Components;

use App\Models\Icon\EhallQuestMember;
use App\Models\Icon\EhallQuestQuiz;
use App\Models\Icon\EhallQuestType;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class QuizCard extends Component
{
    public $quizzes;
    public $type_quiz;
    public $currentQuiz;
    public $answer;
    public $message;
    public $is_done;
    public $quizStatus;
    protected $listeners = ['submitAnswer', 'refreshPage'];

    public function render()
    {
        return view('livewire.pages.landing.e-hall.components.quiz-card');
    }

    public function moveQuestion($n)
    {
        $this->currentQuiz += $n;
        $this->answer = "";
    }

    public function mount($type_id, $no){
        $this->type_quiz = EhallQuestType::find($type_id);
        $this->quizzes = $this->type_quiz->quizzes;
    }

    public function submitAnswer()
    {
        $check = EhallQuestMember::where('member_id',Auth::user()->userable_id)->where('quiz_id',$this->quizzes[$this->currentQuiz]->id)->first();
        if ($this->quizStatus[$this->currentQuiz]['is_done']||$check) return $this->emit('alert', 'Anda Sudah menjawab quiz');
        $quiz = EhallQuestQuiz::where('id', $this->quizzes[$this->currentQuiz]->id)->first();
        $member = EhallQuestMember::create([
            'member_id' => Auth::user()->userable->id,
            'quiz_id' => $quiz->id,
            'answer' => $this->answer,
            'is_right' => 0
        ]);

        //Check Answer
        if (trim(strtolower($this->answer)) == trim(strtolower($quiz->answer))) {
            $member->is_right = 1;
            $member->save();
            Auth::user()->userable->increment('hois_point', 300);
            $status = "Correct";
            $this->quizStatus = $this->quizStatus->replace([$this->currentQuiz => ['is_done' => true, 'btnStatus' => 'btn-success']]);
            $this->emit('Answer', $status);
        } else {
            $status = "False";
            $this->quizStatus = $this->quizStatus->replace([$this->currentQuiz => ['is_done' => true, 'btnStatus' => 'btn-danger']]);
            $this->emit('Answer', $status);
        }
    }
}
