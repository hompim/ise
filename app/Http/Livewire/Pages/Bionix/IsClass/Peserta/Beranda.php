<?php

namespace App\Http\Livewire\Pages\Bionix\IsClass\Peserta;

use App\Models\Bionix\Announcement;
use Livewire\Component;

class Beranda extends Component
{
    public $announcement;

    public function render()
    {
        return view('livewire.pages.bionix.is-class.peserta.beranda')->layout('layouts.dashboard');
    }

    public function mount(){
        $this->announcement = Announcement::all();
    }
}
