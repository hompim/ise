<?php

namespace App\Http\Livewire\Pages\Bionix\IsClass\Admin\DaftarPeserta\Datatable;

use App\Models\Bionix\IsClassData;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;

class Index extends LivewireDatatable
{
    public function builder()
    {
        return IsClassData::join('members', function ($q) {
            $q->on('members.id', '=', 'is_class_data.member_id');
        })->join('users', function ($q) {
            $q->on('users.userable_id', '=', 'members.id');
            $q->where('users.userable_type', '=', 'App\Models\Member');
        });
    }

    public function columns()
    {
        return [
            Column::name('users.name')->label('Nama')->searchable(),
            //Column::name('presensi_status')->label('Presensi')->filterable([1, 0]),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.bionix.is-class.admin.daftar-peserta.components.datatable-action', ['id' => $id]);
            })
        ];
    }
}
