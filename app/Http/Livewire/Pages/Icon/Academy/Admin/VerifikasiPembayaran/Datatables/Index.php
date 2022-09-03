<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\VerifikasiPembayaran\Datatables;

use App\Models\Bionix\TeamJuniorData;
use App\Models\Icon\IconAcademyDataScienceData;
use App\Models\Icon\IconAcademyStartupData;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public $type;
    public function builder()
    {
        if ($this->model == 'App\Models\Bionix\IconAcademyStartupData') {
            return IconAcademyStartupData::query()
                ->where('commitement_payment_status', 'Tahap Verifikasi')
                ->leftJoin('icon_academy_startup_members as leader', 'leader.id', 'icon_academy_startup_data.leader_id');
        } elseif ($this->model == 'App\Models\Bionix\IconAcademyDataScienceDat') {
            return IconAcademyDataScienceData::query()
                ->where('commitement_payment_status', 'Tahap Verifikasi')
                ->leftJoin('icon_academy_data_science_members as leader', 'leader.id', 'icon_academy_data_science_data.leader_id');
        }
    }

    public function columns()
    {
        $this->type = $this->model == 'App\Models\Icon\IconAcademyStartupData' ? 'Startup' : 'DataScience';
        return [
            Column::name('team_name')->searchable()->label('Nama Tim'),
            Column::name('university_name')->searchable()->label('Nama Institusi'),
            Column::name('leader.name')->searchable()->label('Nama Ketua'),
            Column::name('leader.email')->searchable()->label('Nama Member 1'),
            Column::name('leader.whatsapp')->searchable()->label('Nama Member 2'),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.academy.admin.verifikasi-pembayaran.components.datatable-action', ['id' => $id, 'type' => $this->type]);
            })
        ];
    }
}
