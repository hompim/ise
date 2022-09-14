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
        if ($this->currentQuiz + $n >= 0 && $this->currentQuiz + $n <= count($this->quizzes)) {
            $this->currentQuiz += $n;
        }
    }

    public function moveToQuestion($n)
    {
        $this->currentQuiz = $n;
    }

    public function setAnswer($answer)
    {
        $this->answers[$this->currentQuiz] = $answer;
    }

    public function mount($type_id)
    {
        $this->type_quiz = EhallQuestType::find($type_id);
        $this->quizzes = $this->type_quiz->quizzes;
        $this->quizStatus = collect();

        foreach ($this->quizzes as $quizNo => $quiz) {
            if (Auth::check()) {
                $quizAnswered = Auth::user()->userable->quizAnswers->where('quiz_id', $quiz->id)->first();
                if ($quizAnswered) {
                    $this->quizStatus->put($quizNo, ['is_done' => true, 'status' => $quizAnswered->is_right == 1 ? true : false]);
                } else {
                    $this->quizStatus->put($quizNo, ['is_done' => false]);
                }
            } else {
                $this->quizStatus->put($quizNo, ['is_done' => false]);
            }
        }
    }

    public function submitAnswer()
    {
        $check = EhallQuestMember::where('member_id', Auth::user()->userable_id)->where('quiz_id', $this->quizzes[$this->currentQuiz]->id)->first();
        if ($this->quizStatus[$this->currentQuiz]['is_done'] || $check) return $this->emit('alert', 'Anda Sudah menjawab quiz');
        $member = EhallQuestMember::create([
            'member_id' => Auth::user()->userable->id,
            'quiz_id' => $this->quizzes[$this->currentQuiz]->id,
            'answer' => $this->answers[$this->currentQuiz],
            'is_right' => 0
        ]);

        //Check Answer
        if (trim(strtolower($this->answers[$this->currentQuiz])) == trim(strtolower($this->quizzes[$this->currentQuiz]->answer))) {
            $member->is_right = 1;
            $member->save();
            Auth::user()->userable->increment('hois_point', 300);
            $status = "Correct";
            $this->quizStatus = $this->quizStatus->replace([$this->currentQuiz => ['is_done' => true, 'status' => true]]);
            $this->emit('Answer', $status);
        } else {
            $status = "False";
            $this->quizStatus = $this->quizStatus->replace([$this->currentQuiz => ['is_done' => true, 'status' =>  false]]);
            $this->emit('Answer', $status);
        }
    }
}
