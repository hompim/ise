<?php

namespace App\Http\Livewire\Pages\Icon\Ehall\Admin\Challage\Datatable;

use App\Models\Icon\EhallChallage;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public function builder()
    {
        return EhallChallage::join('members', function ($q) {
            $q->on('members.id', '=', 'ehall_challages.member_id');
        })->join('users', function ($q) {
            $q->on('users.userable_id', '=', 'members.id');
            $q->where('users.userable_type', '=', 'App\Models\Member');
        });
    }

    public function columns()
    {
        return [
            Column::name('users.name')->label('Name')->searchable(),
            Column::name('users.email')->label('Email')->searchable(),
            Column::name('ehall_challages.is_accepted')->label('Status'),
            Column::callback(['id', 'is_accepted'], function ($id, $is_accepted) {
                return view('livewire.pages.icon.ehall.admin.challage.components.datatable-action', ['id' => $id, 'status' => $is_accepted]);
            })
        ];
    }
}
