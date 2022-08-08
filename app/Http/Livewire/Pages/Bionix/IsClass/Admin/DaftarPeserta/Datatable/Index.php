<?php

namespace App\Http\Livewire\Pages\Bionix\IsClass\Admin\DaftarPeserta\Datatable;

use App\Models\Bionix\IsClassData;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;

class Index extends LivewireDatatable
{
    public $exportable = true;

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
            Column::name('info_source')->label('Informasi Asal')->filterable([
                "Media Sosial ISE! 2021",
                "Media Sosial selain ISE! 2021 (info lomba, dll)",
                "Roadshow ISE! 2021",
                "Grup WA/Line/dll",
                "Sekolah (guru, dll)",
                "Teman/keluarga",
                "Website/Aplikasi Sejuta Cita"
            ]),
            Column::name('school_name')->label('Nama Sekolah')->searchable(),
            Column::name('profile_verif_status')->label('Status Verifikasi Biodata')->filterable(['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']),
            Column::raw('date_format(is_class_data.created_at,"%d %b %Y %H:%i:%s")')->sortBy('date_format(is_class_data.created_at,"%d %b %Y %H:%i:%s")')->label("Waktu Pendaftaran"),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.bionix.is-class.admin.daftar-peserta.components.datatable-action', ['id' => $id]);
            })
        ];
    }
}
