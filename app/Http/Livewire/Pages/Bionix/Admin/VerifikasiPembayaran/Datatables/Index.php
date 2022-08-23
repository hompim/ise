<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\VerifikasiPembayaran\Datatables;

use App\Models\Bionix\City;
use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamSeniorData;
use Carbon\Carbon;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class Index extends LivewireDatatable
{
    public function builder()
    {
        if ($this->model == 'App\Models\Bionix\TeamJuniorData') {
            return TeamJuniorData::query()
                ->where('payment_verif_status', 'Tahap Verifikasi')
                ->leftJoin('team_junior_members as leader_group', 'leader_group.id', 'team_junior_data.leader_id');
        } elseif ($this->model == 'App\Models\Bionix\TeamSeniorData') {
            return TeamSeniorData::query()
                ->where('payment_verif_status', 'Tahap Verifikasi')
        }
        return null;
    }

    public function columns()
    {
        $column = [];
        if ($this->model == 'App\Models\Bionix\TeamJuniorData') {
            $column = [
                Column::name('team_name')->searchable()->label('Nama Tim'),
                Column::name('city.name')->label('Kab/Kota/Provinsi')->filterable($this->cities->pluck('name')),
                Column::name('school_name')->label('Nama Sekolah'),
                Column::name('leader_group.name')->label('Nama Ketua'),
                NumberColumn::name('payment_price')->label('Jumlah Bayar'),
                Column::callback(['id'], function ($id) {
                    return view('livewire.pages.bionix.admin.verifikasi-pembayaran.components.datatable-actions', ['id' => $id, 'type' => 'student']);
                })
            ];
        } elseif ($this->model == 'App\Models\Bionix\TeamSeniorData') {
            $column = [
                Column::name('team_name')->searchable()->label('Nama Tim'),
                Column::name('city.name')->label('Kab/Kota/Provinsi')->filterable($this->cities->pluck('name')),
                NumberColumn::name('payment_price')->label('Jumlah Bayar'),
                // Column::callback(['id'], function ($id) {
                //     return view('livewire.pages.bionix.admin.verifikasi-pembayaran.components.datatable-action', ['id' => $id, 'type' => 'college']);
                // })
            ];
        }
        return $column;
    }

    public function getCitiesProperty()
    {
        return City::query();
    }
}
