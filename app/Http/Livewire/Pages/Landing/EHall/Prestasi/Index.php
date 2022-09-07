<?php

namespace App\Http\Livewire\Pages\Landing\EHall\Prestasi;

use App\Models\Icon\EhallArticle;
use Livewire\Component;

class Index extends Component
{
    public $articles;

    public function render()
    {
        return view('livewire.pages.landing.e-hall.prestasi.index')->layout('layouts.landing');;
    }

    public function mount()
    {
        $this->articles =  EhallArticle::where('type', 'Prestasi')->get();
    }
}
