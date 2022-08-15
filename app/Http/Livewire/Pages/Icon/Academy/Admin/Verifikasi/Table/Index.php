<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Verifikasi\Table;

use App\Models\Icon\IconAcademyDataScienceData;
use App\Models\Icon\IconAcademyStartupData;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public $type;

    public function builder()
    {
        if ($this->model == 'App\Models\Icon\IconAcademyStartupData') {
            return IconAcademyStartupData::query()
                ->where('competition_round', 'Administrasi')
                ->leftJoin('icon_academy_startup_members as leader', 'leader.id', 'icon_academy_startup_data.leader_id')
                ->leftJoin('icon_academy_startup_members as member1', 'member1.id', 'icon_academy_startup_data.member1_id')
                ->leftJoin('icon_academy_startup_members as member2', 'member2.id', 'icon_academy_startup_data.member2_id');
        } elseif ($this->model == 'App\Models\Icon\IconAcademyDataScienceData') {
            return IconAcademyDataScienceData::query()
                ->where('competition_round', 'Administrasi')
                ->leftJoin('icon_academy_data_science_members as leader', 'leader.id', 'icon_academy_data_science_data.leader_id')
                ->leftJoin('icon_academy_data_science_members as member1', 'member1.id', 'icon_academy_data_science_data.member1_id')
                ->leftJoin('icon_academy_data_science_members as member2', 'member2.id', 'icon_academy_data_science_data.member2_id');
        }

        return null;
    }
    public function columns()
    {
        $this->type = $this->model == 'App\Models\Icon\IconAcademyStartupData' ? 'Startup' : 'DataScience';
        return [
            Column::name('team_name')->searchable()->label('Nama Tim'),
            Column::name('university_name')->searchable()->label('Nama Institusi'),
            Column::name('leader.name')->searchable()->label('Nama Ketua'),
            Column::name('member1.name')->searchable()->label('Nama Member 1'),
            Column::name('member2.name')->searchable()->label('Nama Member 2'),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.academy.admin.verifikasi.components.datatable-action', ['id' => $id, 'type' => $this->type]);
            })
        ];
    }
}
