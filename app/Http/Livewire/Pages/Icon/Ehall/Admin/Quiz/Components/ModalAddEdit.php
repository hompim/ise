<?php

namespace App\Http\Livewire\Pages\Icon\Ehall\Admin\Quiz\Components;

use App\Models\Icon\EhallQuestQuiz;
use App\Models\Icon\EhallQuestType;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class ModalAddEdit extends ModalComponent
{
    use WithFileUploads;

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
        if ($type == 'edit') {
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
            $this->opt_a_image = null;
            $this->opt_b_image = null;
            if ($this->quiz->question_type == 'Picture') {
                $this->opt_a_image = $this->quiz->opt_a;
                $this->opt_b_image = $this->quiz->opt_b;
            }
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

            if ($this->quiz_type == 'Picture') {
                $quiz = EhallQuestQuiz::create([
                    'question' => $this->question,
                    'question_type' => $this->quiz_type,
                    'type_id' => $this->quiz_category,
                    'explanation' => $this->explanation,
                    'answer' => $this->answer,
                ]);

                if (!is_string($this->opt_a)) {
                    $this->validate([
                        'opt_a' => 'required|image|max:2048',
                    ]);
                    $name_a = date('YmdHis') . '_QUIZ_A_' . $quiz->id . '.' . $this->opt_a->getClientOriginalExtension();
                    $this->opt_a->storeAs('quiz', $name_a, 'public');
                    $path_a = 'quiz/' . $name_a;
                    $quiz->update([
                        'opt_a' => $path_a,
                    ]);
                }

                if (!is_string($this->opt_b)) {
                    $this->validate([
                        'opt_b' => 'required|image|max:2048',
                    ]);
                    $name_b = date('YmdHis') . '_QUIZ_B_' . $quiz->id . '.' . $this->opt_b->getClientOriginalExtension();
                    $this->opt_b->storeAs('quiz', $name_b, 'public');
                    $path_b = 'quiz/' . $name_b;
                    $quiz->update([
                        'opt_b' => $path_b,
                    ]);
                }
            } else {
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
            }
        } else {
            if ($this->quiz_type == 'Picture') {

                $this->quiz->update([
                    'question' => $this->question,
                    'question_type' => $this->quiz_type,
                    'type_id' => $this->quiz_category,
                    'opt_a' => $this->path_a,
                    'opt_b' => $this->path_b,
                    'explanation' => $this->explanation,
                    'answer' => $this->answer,
                ]);

                if (!is_string($this->opt_a)) {
                    $this->validate([
                        'opt_a' => 'required|image|max:2048',
                    ]);
                    $name_a = date('YmdHis') . '_QUIZ_A_' . $this->quiz->id . '.' . $this->fileTask->getClientOriginalExtension();
                    $this->opt_a->storeAs('quiz', $name_a, 'public');
                    $path_a = 'jawaban_tugas_bionix/' . $name_a;
                    $this->quiz->update([
                        'opt_a' => $path_a,
                    ]);
                }

                if (!is_string($this->opt_b)) {
                    $this->validate([
                        'opt_b' => 'required|image|max:2048',
                    ]);
                    $name_b = date('YmdHis') . '_QUIZ_B_' . $this->quiz->id . '.' . $this->fileTask->getClientOriginalExtension();
                    $this->opt_b->storeAs('quiz', $name_b, 'public');
                    $path_b = 'jawaban_tugas_bionix/' . $name_b;
                    $this->quiz->update([
                        'opt_b' => $path_b,
                    ]);
                }
            }

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
