<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Promo\Datatable;

use App\Models\Bionix\PromoCode;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class Index extends LivewireDatatable
{
    public $model = PromoCode::class;
    public function columns()
    {
        return [
            Column::name('name')->label('Nama'),
            Column::name('promo_code')->label('Kode'),
            NumberColumn::name('nominal'),
            DateColumn::raw('start')
                ->label('Tanggal Mulai')
                ->format('d M Y')
                ->defaultSort('desc'),
            DateColumn::raw('end')
                ->label('Tanggal Selesai')
                ->format('d M Y'),
            Column::callback(['id'],function($id){
                return view('livewire.pages.bionix.admin.promo.components.datatable-action',['id'=>$id]);
            })
        ];
    }
}
