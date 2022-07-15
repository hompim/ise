<?php

namespace App\Http\Livewire\Pages\Icon\Webinar\Admin\Feedback\Datatable;

use App\Models\Icon\IconWebinarKickOffFeedback;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends LivewireDatatable
{
    public function builder()
    {
        return IconWebinarKickOffFeedback::query();
    }

    public function columns()
    {
        return [
            Column::name('webinar.member.user.name')->label('Nama')->searchable(),
            //Column::name('presensi_status')->label('Presensi')->filterable([1, 0]),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.webinar.admin.feedback.components.datatable-action', ['id' => $id]);
            })
        ];
    }
}
