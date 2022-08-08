<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Beranda;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.icon.academy.admin.beranda.index')->layout('layouts.dashboard');
    }
}
