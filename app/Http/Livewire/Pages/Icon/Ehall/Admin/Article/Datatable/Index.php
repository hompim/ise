<?php

namespace App\Http\Livewire\Pages\Icon\Ehall\Admin\Article\Datatable;

use App\Models\Icon\EhallArticle;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public $model = EhallArticle::class;

    public function columns()
    {
        return [
            Column::name('title')->label('Judul'),
            Column::name('type')->label('Tipe'),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.ehall.admin.article.components.datatable-action', ['id' => $id]);
            })
        ];
    }
}
