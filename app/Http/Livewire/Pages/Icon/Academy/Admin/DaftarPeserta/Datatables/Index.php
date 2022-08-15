<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\DaftarPeserta\Datatables;

use App\Models\Icon\IconAcademyDataScienceData;
use App\Models\Icon\IconAcademyStartupData;
use Maatwebsite\Excel\Facades\Excel;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public function builder()
    {
        if ($this->model == 'App\Models\Icon\IconAcademyStartupData') {
            return IconAcademyStartupData::query()
                ->leftJoin('icon_academy_startup_members as leader', 'leader.id', 'icon_academy_startup_data.leader_id')
                ->leftJoin('icon_academy_startup_members as member1', 'member1.id', 'icon_academy_startup_data.member1_id')
                ->leftJoin('icon_academy_startup_members as member2', 'member2.id', 'icon_academy_startup_data.member2_id');
        } elseif ($this->model == 'App\Models\Icon\IconAcademyDataScienceData') {
            return IconAcademyDataScienceData::query()
                ->leftJoin('icon_academy_data_science_members as leader', 'leader.id', 'icon_academy_data_science_data.leader_id')
                ->leftJoin('icon_academy_data_science_members as member1', 'member1.id', 'icon_academy_data_science_data.member1_id')
                ->leftJoin('icon_academy_data_science_members as member2', 'member2.id', 'icon_academy_data_science_data.member2_id');
        }

        return null;
    }

    public function columns()
    {
        $column = [];
        if ($this->model == 'App\Models\Icon\IconAcademyStartupData') {
            $column = [
                Column::checkbox(),
                Column::raw('Concat("STR",
                                    IF(`icon_academy_startup_data`.`id`<10,concat("000",`icon_academy_startup_data`.`id`),
                                        IF(`icon_academy_startup_data`.`id`>=10 AND `icon_academy_startup_data`.`id`<100,concat("00",`icon_academy_startup_data`.`id`),
                                            IF(`icon_academy_startup_data`.`id`>=100 AND `icon_academy_startup_data`.`id`<1000,concat("0",`icon_academy_startup_data`.`id`),`icon_academy_startup_data`.`id`)
                                        )
                                    )
                                 ) AS nomor')->searchable()->defaultSort('asc'),
                Column::name('team_name')->searchable()->label('Nama Tim')->searchable(),
                Column::name('university_name')->label('Nama Institusi')->searchable(),
                Column::name('leader.name')->label('Nama Ketua')->searchable(),
                Column::name('member1.name')->label('Nama Member 1')->searchable(),
                Column::name('member2.name')->label('Nama Member 2')->searchable(),
                Column::name('commitement_payment_status')->label('Status Verifikasi Biodata')->filterable(['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']),
                Column::name('competition_round')->label('Status Academy')->filterable(['Proses Seleksi', 'Lolos', 'Tidak Lolos']),
                Column::raw('date_format(icon_academy_startup_data.created_at,"%d %b %Y %H:%i:%s")')->sortBy('date_format(icon_academy_startup_data.created_at,"%d %b %Y %H:%i:%s")')->label("Waktu Pendaftaran"),
                Column::callback(['id'], function ($id) {
                    return view('livewire.pages.icon.academy.admin.daftar-peserta.components.datatable-action', ['id' => $id, 'type' => 'Startup']);
                })
            ];
        } elseif ($this->model == 'App\Models\Icon\IconAcademyDataScienceData') {
            $column = [
                Column::checkbox(),
                Column::raw('Concat("DSC",
                                    IF(`icon_academy_data_science_data`.`id`<10,concat("000",`icon_academy_data_science_data`.`id`),
                                        IF(`icon_academy_data_science_data`.`id`>=10 AND `icon_academy_data_science_data`.`id`<100,concat("00",`icon_academy_data_science_data`.`id`),
                                            IF(`icon_academy_data_science_data`.`id`>=100 AND `icon_academy_data_science_data`.`id`<1000,concat("0",`icon_academy_data_science_data`.`id`),`icon_academy_data_science_data`.`id`)
                                        )
                                    )
                                 ) AS nomor')->searchable()->defaultSort('asc'),
                Column::name('team_name')->searchable()->label('Nama Tim')->searchable(),
                Column::name('university_name')->label('Nama Institusi')->searchable(),
                Column::name('leader.name')->label('Nama Ketua')->searchable(),
                Column::name('member1.name')->label('Nama Member 1')->searchable(),
                Column::name('member2.name')->label('Nama Member 2')->searchable(),
                Column::name('commitement_payment_status')->label('Status Commitment Fee')->filterable(['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']),
                Column::name('competition_round')->label('Status Academy')->filterable(['Proses Seleksi', 'Lolos', 'Tidak Lolos']),
                Column::raw('date_format(icon_academy_data_science_data.created_at,"%d %b %Y %H:%i:%s")')->sortBy('date_format(icon_academy_startup_data.created_at,"%d %b %Y %H:%i:%s")')->label("Waktu Pendaftaran"),
                Column::callback(['id'], function ($id) {
                    return view('livewire.pages.icon.academy.admin.daftar-peserta.components.datatable-action', ['id' => $id, 'type' => 'Data Science']);
                })
            ];
        }
        return $column;
    }

    public function saveStatus()
    {
        foreach ($this->selected as $selected) {
            if ($this->model == 'App\Models\Icon\IconAcademyStartupData') {
                IconAcademyStartupData::find($selected)->update(
                    [
                        'academy_status' => $this->statusValue
                    ]
                );
            } elseif ($this->model == 'App\Models\Icon\IconAcademyDataScienceData') {
                IconAcademyDataScienceData::find($selected)->update(
                    [
                        'academy_status' => $this->statusValue
                    ]
                );
            }
        }
        $this->emit('refreshLivewireDatatable');
    }
}
