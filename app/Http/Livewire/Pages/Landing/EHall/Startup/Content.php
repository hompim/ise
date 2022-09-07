<?php

namespace App\Http\Livewire\Pages\Landing\EHall\Startup;

use App\Models\Icon\EhallArticle;
use Livewire\Component;

class Content extends Component
{
    public $article;

    public function render()
    {
        return view('livewire.pages.landing.e-hall.startup.content')->layout('layouts.landing');;
    }

    public function mount($slug){
        $this->article = EhallArticle::where('slug', $slug)->first();
    }
}
