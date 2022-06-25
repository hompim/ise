<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\DaftarPeserta\Datatables;

use App\Models\Bionix\City;
use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamSeniorData;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;


class Index extends LivewireDatatable
{
    public $exportable = true;
    public $withUbahStatus = true;
    public $radio;
    public $status = [];
    public $statusValue = '';

    // public function mount(
    //     $model = false,
    //     $include = [],
    //     $exclude = [],
    //     $hide = [],
    //     $dates = [],
    //     $times = [],
    //     $searchable = [],
    //     $sort = null,
    //     $hideHeader = null,
    //     $hidePagination = null,
    //     $perPage = null,
    //     $exportable = false,
    //     $hideable = false,
    //     $beforeTableSlot = false,
    //     $buttonsSlot = false,
    //     $afterTableSlot = false,
    //     $params = []
    // ){
    //     parent::mount();
    //     if ($this->model == 'App\Models\Bionix\TeamJuniorData') {
    //         $this->status = ['Penyisihan 1', 'Penyisihan 2', 'Semifinal', 'Final'];
    //         $this->radio = 'student';
    //     } elseif ($this->model == 'App\Models\Bionix\TeamSeniorData') {
    //         $this->status = ['Penyisihan', 'Semifinal', 'Final'];
    //         $this->radio = 'college';
    //     }
    //     $this->statusValue = $this->status[0];
    // }

    public function builder()
    {
        if ($this->model == 'App\Models\Bionix\TeamJuniorData') {
            $this->status = ['Penyisihan 1', 'Penyisihan 2', 'Semifinal', 'Final'];
            $this->statusValue = $this->status[0];
            return TeamJuniorData::query()
                ->leftJoin('team_junior_members as leader_group', 'leader_group.id', 'team_junior_data.leader_id')
                ->leftJoin('team_junior_members as member_group', 'member_group.id', 'team_junior_data.member_id');
        } elseif ($this->model == 'App\Models\Bionix\TeamSeniorData') {
            $this->status = ['Penyisihan', 'Semifinal', 'Final'];
            $this->statusValue = $this->status[0];
            return TeamSeniorData::query()
                ->leftJoin('team_senior_members as leader', 'leader.id', 'team_senior_data.leader_id')
                ->leftJoin('team_senior_members as member1', 'member1.id', 'team_senior_data.member1_id')
                ->leftJoin('team_senior_members as member2', 'member2.id', 'team_senior_data.member2_id');
        }
        return null;
    }

    public function columns()
    {
        $column = [];
        if ($this->model == 'App\Models\Bionix\TeamJuniorData') {
            $column = [
                Column::checkbox(),
                Column::raw('Concat("STD",
                                    IF(`team_junior_data`.`id`<10,concat("000",`team_junior_data`.`id`),
                                        IF(`team_junior_data`.`id`>=10 AND `team_junior_data`.`id`<100,concat("00",`team_junior_data`.`id`),
                                            IF(`team_junior_data`.`id`>=100 AND `team_junior_data`.`id`<1000,concat("0",`team_junior_data`.`id`),`team_junior_data`.`id`)
                                        )
                                    )
                                 ) AS nomor')->defaultSort('desc'),
                Column::name('team_name')->label('Nama Tim')->searchable(),
                Column::name('info_source')->label('Informasi Asal')->filterable(["Media Sosial ISE! 2021",
                    "Media Sosial selain ISE! 2021 (info lomba, dll)",
                    "Roadshow ISE! 2021",
                    "Grup WA/Line/dll",
                    "Sekolah (guru, dll)",
                    "Teman/keluarga",
                    "Website/Aplikasi Sejuta Cita"]),
                Column::name('city.region')->label('Region')->filterable($this->cities->distinct()->pluck('region')),
                Column::name('city.name')->label('Kab/Kota/Provinsi')->filterable($this->cities->pluck('name')),
                Column::name('school_name')->label('Nama Sekolah')->searchable(),
                Column::name('competition_round')->filterable(['Penyisihan 1', 'Penyisihan 2', 'Semifinal', 'Final'])->label('Babak'),
                Column::name('leader_group.name')->label('Nama Ketua')->searchable(),
                Column::name('leader_group.email')->label('Email Ketua')->searchable(),
                Column::name('member_group.name')->label('Nama Member')->searchable(),
                Column::name('member_group.Email')->label('Email Member')->searchable(),
                Column::name('profile_verif_status')->label('Status Verifikasi Biodata')->filterable(['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']),
                Column::name('payment_verif_status')->label('Status Pembayaran')->filterable(['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']),
                Column::raw('date_format(team_junior_data.created_at,"%d %b %Y %H:%i:%s")')->sortBy('date_format(team_junior_data.created_at,"%d %b %Y %H:%i:%s")')->label("Waktu Pendaftaran"),
                // Column::callback(['id'], function ($id) {
                //     return view('livewire.pages.bionix.admin.daftar-peserta.data-tables.actions', ['id' => $id, 'type' => 'student']);
                // })
            ];
        } elseif ($this->model == 'App\Models\Bionix\TeamSeniorData') {
            $column = [
                Column::checkbox(),
                Column::raw('Concat("CLG",
                                    IF(`team_senior_data`.`id`<10,concat("000",`team_senior_data`.`id`),
                                        IF(`team_senior_data`.`id`>=10 AND `team_senior_data`.`id`<100,concat("00",`team_senior_data`.`id`),
                                            IF(`team_senior_data`.`id`>=100 AND `team_senior_data`.`id`<1000,concat("0",`team_senior_data`.`id`),`team_senior_data`.`id`)
                                        )
                                    )
                                 ) AS nomor')->defaultSort('desc'),
                Column::name('team_name')->label('Nama Tim')->searchable(),
                Column::name('info_source')->label('Informasi Asal')->filterable(["Media Sosial ISE! 2021",
                    "Media Sosial selain ISE! 2021 (info lomba, dll)",
                    "Roadshow ISE! 2021",
                    "Grup WA/Line/dll",
                    "Sekolah (guru, dll)",
                    "Teman/keluarga",
                    "Website/Aplikasi Sejuta Cita"]),
                Column::name('city.name')->label('Kab/Kota/Provinsi')->filterable($this->cities->pluck('name')),
                Column::name('university_name')->label('Nama Universitas'),
                Column::name('competition_round')->filterable(['Penyisihan', 'Semifinal', 'Final'])->label('Babak'),
                Column::name('leader.name')->label('Nama Ketua')->searchable(),
                Column::name('leader.email')->label('Email Ketua')->searchable(),
                Column::name('member1.name')->label('Nama Member 1')->searchable(),
                Column::name('member1.email')->label('Email Member 1')->searchable(),
                Column::name('member2.name')->label('Nama Member 2')->searchable(),
                Column::name('member2.email')->label('Email Member 2')->searchable(),
                Column::name('profile_verif_status')->label('Status Verifikasi Biodata')->filterable(['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']),
                Column::name('payment_verif_status')->label('Status Pembayaran')->filterable(['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']),
                Column::raw('date_format(team_senior_data.created_at,"%d %b %Y %H:%i:%s")')->sortBy('date_format(team_junior_data.created_at,"%d %b %Y %H:%i:%s")')->label("Waktu Pendaftaran"),
                // Column::callback(['id'], function ($id) {
                //     return view('livewire.pages.bionix.admin.daftar-peserta.data-tables.actions', ['id' => $id, 'type' => 'college']);
                // })
            ];
        }
        return $column;
    }

    public function getCitiesProperty()
    {
        return City::query();
    }

    public function saveStatus()
    {
        foreach ($this->selected as $selected) {
            if ($this->model == 'App\Models\Bionix\TeamJuniorData') {
                TeamJuniorData::find($selected)->update(
                    [
                        'competition_round' => $this->statusValue
                    ]);
            } elseif ($this->model == 'App\Models\Bionix\TeamSeniorData') {
                if ($this->statusValue == "Semifinal") {
                    TeamSeniorData::find($selected)->update(
                        [
                            'competition_round' => $this->statusValue,
                            'payment_batch_2' => (date('Y-m-d') >= date('Y-m-d', strtotime('2021-9-23')))
                        ]);
                } else {
                    TeamSeniorData::find($selected)->update(
                        [
                            'competition_round' => $this->statusValue
                        ]);
                }

            }
        }
        $this->emit('refreshLivewireDatatable');
    }


}
