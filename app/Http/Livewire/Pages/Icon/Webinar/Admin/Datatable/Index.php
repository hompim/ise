<?php

namespace App\Http\Livewire\Pages\Icon\Webinar\Admin\Datatable;

use App\Models\Icon\IconWebinarKickOff;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public function builder()
    {
        return IconWebinarKickOff::join('members', function ($q) {
            $q->on('members.id', '=', 'icon_webinar_kick_offs.member_id');
        })->join('users', function ($q) {
            $q->on('users.userable_id', '=', 'members.id');
            $q->where('users.userable_type', '=', 'App\Models\Member');
        });
    }

    public function columns()
    {
        return [
            Column::name('users.name')->label('Nama')->searchable(),
            Column::name('info_source')->label('Informasi Asal')->filterable(["Media Sosial ISE! 2022",
                "Media Sosial selain ISE! 2022 (info lomba, dll)",
                "Grup WA/Line/dll",
                "Sekolah (guru, dll)",
                "Teman/keluarga",
                "Website/Aplikasi Sejuta Cita"]),
            //Column::name('presensi_status')->label('Presensi')->filterable([1, 0]),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.webinar.admin.componenets.datatable-action', ['id' => $id]);
            })
        ];
    }
}
