<?php

namespace App\Http\Livewire\Pages\Landing\EHall\Startup;

use App\Models\Icon\EhallArticle;
use Livewire\Component;

class Index extends Component
{
    public $articles;

    public function render()
    {
        return view('livewire.pages.landing.e-hall.startup.index')->layout('layouts.landing');;
    }

    public function mount()
    {
        $this->articles =  EhallArticle::where('type', 'Startup')->get();

        
    }
}
