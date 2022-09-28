<?php

namespace App\Http\Livewire\Pages\Icon\Ehall\Admin\Quiz\Components;

use App\Models\Icon\EhallQuestQuiz;
use App\Models\Icon\EhallQuestType;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalAddEdit extends ModalComponent
{
    public $modal_type;
    public $explanation;
    public $question;
    public $quiz_type;
    public $quiz_category;
    public $opt_a;
    public $opt_a_image;
    public $opt_b;
    public $opt_b_image;
    public $opt_c;
    public $opt_d;
    public $answer;
    public $category;

    public function render()
    {
        return view('livewire.pages.icon.ehall.admin.quiz.components.modal-add-edit');
    }

    public function mount($type, $id = null)
    {
        $this->modal_type = $type;
        $this->category = EhallQuestType::all();
        if($type == 'edit'){
            $this->quiz = EhallQuestQuiz::find($id);
            $this->explanation = $this->quiz->explanation;
            $this->question = $this->quiz->question;
            $this->quiz_type = $this->quiz->question_type;
            $this->quiz_category = $this->quiz->type_id;
            $this->opt_a = $this->quiz->opt_a;
            $this->opt_b = $this->quiz->opt_b;
            $this->opt_c = $this->quiz->opt_c;
            $this->opt_d = $this->quiz->opt_d;
            $this->answer = $this->quiz->answer;
        }
    }

    public function submit()
    {
        $this->validate([
            'question' => 'required',
            'quiz_type' => 'required',
            'quiz_category' => 'required',
            'answer' => 'required',
            'explanation' => 'required'
        ]);

        if ($this->modal_type == 'add') {
            $quiz = EhallQuestQuiz::create([
                'question' => $this->question,
                'question_type' => $this->quiz_type,
                'type_id' => $this->quiz_category,
                'opt_a' => $this->opt_a,
                'opt_b' => $this->opt_b,
                'opt_c' => $this->opt_c,
                'opt_d' => $this->opt_d,
                'explanation' => $this->explanation,
                'answer' => $this->answer,
            ]);
        }else{
            $this->quiz->update([
                'question' => $this->question,
                'question_type' => $this->quiz_type,
                'type_id' => $this->quiz_category,
                'opt_a' => $this->opt_a,
                'opt_b' => $this->opt_b,
                'opt_c' => $this->opt_c,
                'opt_d' => $this->opt_d,
                'explanation' => $this->explanation,
                'answer' => $this->answer,
            ]);
        }

        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }
}
