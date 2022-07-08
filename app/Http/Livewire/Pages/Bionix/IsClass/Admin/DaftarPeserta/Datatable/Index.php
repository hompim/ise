<?php

namespace App\Http\Livewire\Pages\Bionix\IsClass\Admin\DaftarPeserta\Datatable;

use App\Models\Bionix\IsClassData;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public function builder()
    {
        IsClassData::query();
    }

    public function columns()
    {
        //
    }
}
