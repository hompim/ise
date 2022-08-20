<?php

namespace App\Http\Livewire\Pages\DashboardGeneral\Components;

use LivewireUI\Modal\ModalComponent;

class ModalSkill extends ModalComponent
{
    public function render()
    {
        return view('livewire.pages.dashboard-general.components.modal-skill');
    }

    public static function modalMaxWidth(): string
    {
        return '3xl';
    }
}
