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
        return IconWebinarKickOffFeedback::query()
            ->join('icon_webinar_kick_offs', function ($q) {
                $q->on('icon_webinar_kick_offs.id', '=', 'icon_webinar_kick_off_feedback.webinar_id');
            })->join('members', function ($q) {
                $q->on('members.id', '=', 'icon_webinar_kick_offs.member_id');
            })->join('users', function ($q) {
                $q->on('users.userable_id', '=', 'members.id');
                $q->where('users.userable_type', '=', 'App\Models\Member');
            });
    }

    public function columns()
    {
        return [
            Column::name('users.name')->label('Nama')->searchable(),
            Column::name('penyampaian_materi')->label('Penyampaian Materi'),
            Column::name('pemahaman_materi')->label('Pemahaman Materi'),
            Column::name('keseluruhan_pelaksanaan')->label('Keseluruhan Pelaksanaan'),
            Column::name('kepuasan')->label('Kinerja Panitia'),
            Column::name('saran')->label('Saran'),
            Column::name('kritik')->label('Kritik'),
        ];
    }
}
