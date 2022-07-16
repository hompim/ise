<?php

namespace App\Http\Livewire\Pages\Icon\Webinar\Admin\Presensi\Datatable;

use App\Models\Icon\IconWebinarKickOff;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public $exportable = true;

    public function builder()
    {
        return IconWebinarKickOff::where('presensi_status', true)->join('members', function ($q) {
            $q->on('members.id', '=', 'icon_webinar_kick_offs.member_id');
        })->join('users', function ($q) {
            $q->on('users.userable_id', '=', 'members.id');
            $q->where('users.userable_type', '=', 'App\Models\Member');
        });
    }

    public function columns()
    {
        return [
            Column::name('users.name')->label('Nama Lengkap')->searchable(),
            Column::name('users.email')->label('Email'),
            Column::name('users.whatsapp')->label('Whatsapp'),
            Column::name('school_name')->label('Sekolah/Universitas/Instansi')
        ];
    }
}
