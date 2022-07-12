<?php

namespace App\Http\Livewire\Pages\Bionix\IsClass\Admin\Beranda;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.bionix.is-class.admin.beranda.index')->layout('layouts.dashboard');
    }
}
