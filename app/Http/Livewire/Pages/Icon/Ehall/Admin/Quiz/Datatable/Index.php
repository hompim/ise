<?php

namespace App\Http\Livewire\Pages\Icon\Ehall\Admin\Quiz\Datatable;

use App\Models\Icon\EhallQuestQuiz;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public $model = EhallQuestQuiz::class;

    public function columns()
    {
        return [
            Column::name('question')->label('Pertanyaan'),
            Column::name('answer')->label('Jawaban'),
            Column::name('type.name')->label('Tipe'),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.ehall.admin.quiz.components.datatable-action', ['id' => $id]);
            })
        ];
    }
}
