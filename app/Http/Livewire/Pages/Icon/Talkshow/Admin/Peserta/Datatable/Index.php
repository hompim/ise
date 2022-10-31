<?php

namespace App\Http\Livewire\Pages\Icon\Talkshow\Admin\Peserta\Datatable;

use App\Models\Icon\IconGrandTalkshow;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public function builder()
    {
        return IconGrandTalkshow::join('members', function ($q) {
            $q->on('members.id', '=', 'icon_grand_talkshows.member_id');
        })->join('users', function ($q) {
            $q->on('users.userable_id', '=', 'members.id');
            $q->where('users.userable_type', '=', 'App\Models\Member');
        });
    }

    public function columns()
    {
        return [
            Column::name('users.name')->label('Nama')->searchable(),
            Column::name('info_source')->label('Informasi Asal')->filterable([
                "Media Sosial ISE! 2022",
                "Media Sosial selain ISE! 2022 (info lomba, dll)",
                "Grup WA/Line/dll",
                "Sekolah (guru, dll)",
                "Teman/keluarga",
                "Website/Aplikasi Sejuta Cita"
            ]),
            Column::name('presensi_status')->label('Presensi')->filterable([1, 0]),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.talkshow.admin.componenets.datatable-action', ['id' => $id]);
            })
        ];
    }
}
