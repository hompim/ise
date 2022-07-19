<?php

namespace App\Http\Livewire\Pages\Icon\Webinar\Admin\Feedback\Datatable;

use App\Models\Icon\IconWebinarKickOffFeedback;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{

    public $exportable = true;

    public function builder()
    {
        return IconWebinarKickOffFeedback::query();
    }

    public function columns()
    {
        return [
            Column::name('webinar.member.user.name')->label('Nama')->searchable(),
            Column::name('penyampaian_materi')->label('Penyampaian Materi'),
            Column::name('pemahaman_materi')->label('Pemahaman Materi'),
            Column::name('keseluruhan_pelaksanaan')->label('Keseluruhan Pelaksanaan'),
            Column::name('kepuasan')->label('Kinerja Panitia'),
            Column::name('kritik')->label('Kritik'),
            Column::name('saran')->label('Saran'),
        ];
    }
}
