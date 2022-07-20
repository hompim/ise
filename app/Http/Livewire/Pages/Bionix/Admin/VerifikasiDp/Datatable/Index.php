<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\VerifikasiDp\Datatable;

use App\Models\Bionix\BionixInvoice;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public function builder()
    {
        return BionixInvoice::query()
            ->where('status', 'Pending')
            ->join('members', function ($q) {
                $q->on('members.id', '=', 'bionix_invoices.member_id');
            })
            ->join('bionix_schools', function($q){
                $q->on('bionix_schools.id', '=' ,'member.roadshow_school_id' );
            })
            ->join('users', function ($q) {
                $q->on('users.userable_id', '=', 'members.id');
                $q->where('users.userable_type', '=', 'App\Models\Member');
            });
    }

    public function columns()
    {
        return [
            Column::name('users.name')->label('Nama')->searchable(),
            Column::name('users.email')->label('Email')->searchable(),
            Column::name('bionix_schools.school_name')->label('Sekolah')->searchable(),
            Column::name('bank_name')->label('Metode Pembayaran'),
            Column::name('account_name')->label('Nama Akun Pembayaran'),
            Column::name('account_no')->label('Nomer Akun Pembayaran'),
            Column::name('nominal')->label('Nominal Pembayaran'),
            DateColumn::name('created_at')->label('Waktu Pemabayaran'),
            Column::callback(['id'],function($id){
                return view('livewire.pages.bionix.admin.verifikasi-dp.components.datatable-action',['id'=>$id]);
            })
        ];
    }
}
