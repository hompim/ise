<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\VerifikasiSeleksi\Datatables;

use App\Models\Icon\IconAcademyDataScienceData;
use App\Models\Icon\IconAcademyStartupData;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public function builder(){
        return IconAcademyDataScienceData::query()->where('competition_round', 'Seleksi')->whereNotNull('jawaban_seleksi_path');
    }

    public function columns()
    {
        return [
            Column::name('team_name')->label('Nama Tim'),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.academy.admin.verifikasi-seleksi.components.datatable-action', ['id' => $id]);
            })
        ];
    }
}
