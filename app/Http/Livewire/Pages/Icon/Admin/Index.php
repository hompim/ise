<?php

namespace App\Http\Livewire\Pages\Icon\Admin;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.icon.admin.index')->layout('layouts.dashboard');
    }
}
