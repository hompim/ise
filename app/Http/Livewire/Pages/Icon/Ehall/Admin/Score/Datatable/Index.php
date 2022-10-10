<?php

namespace App\Http\Livewire\Pages\Icon\Ehall\Admin\Score\Datatable;

use App\Models\Member;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public $model = Member::class;

    public function columns()
    {
        return [
            Column::name('user.name')->label('Nama')->sortBy("hois_point"),
            Column::name('user.email')->label('Email'),
            Column::name('user.whatsapp')->label('Whatsapp'),
            Column::name('hois_point')->label('Point')
        ];
    }
}
