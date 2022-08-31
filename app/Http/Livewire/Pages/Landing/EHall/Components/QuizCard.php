<?php

namespace App\Http\Livewire\Pages\Landing\EHall\Components;

use Livewire\Component;
use App\Models\Icon\EhallQuestQuiz;
use App\Models\Icon\EhallQuestType;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Icon\EhallQuestMember;

class QuizCard extends Component
{
    public $quizzes; // Array dari database
    public $type_quiz;
    public $currentQuiz = 0; // user current question no
    public $answer; // Jawaban tiap soal
    public $answers = []; // Jawaban tiap soal
    public $message;
    public $is_done;
    public $quizStatus;
    protected $listeners = ['submitAnswer', 'refreshPage'];

    public function render()
    {
        return view('livewire.pages.landing.e-hall.components.quiz-card')->layout('layouts.landing');
    }

    public function moveQuestion($n)
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln("Next Question");
        if($this->currentQuiz + $n >= 0 && $this->currentQuiz + $n <= count($this->quizzes))
        {
            $this->currentQuiz += $n;
            $this->answer = "";
        }
    }

    public function moveToQuestion($n)
    {
        if($n >= 0 && $n <= count($this->quizzes))
        {
            $this->currentQuiz += $n;
            $this->answer = "";
        }
    }

    public function setAnswer($answer)
    {
        $this->answers[$this->currentQuiz] = $answer;
    }

    public function mount($type_id){
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
