<?php

namespace App\Http\Livewire\Pages\Admin\ShortenLink\Datatable;

use App\Models\ShortenLink;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public $model = ShortenLink::class;

    public function columns()
    {
        return[
        Column::name('shorten_link')->label('Link'),
        Column::name('destination')->label('Tujuan')->searchable(),
        Column::name('description')->label('Deskripsi')->searchable(),
        Column::callback(['shorten_link'], function ($shorten_link) {
            return view('livewire.pages.admin.shorten-link.components.datatable-qr_code', ['shorten_link' => $shorten_link]);
        })->label("QR Code"),
        Column::callback(['id'], function ($id) {
            return view('livewire.pages.admin.shorten-link.components.datatable-actions', ['id' => $id]);
        }
        )];
    }
}
