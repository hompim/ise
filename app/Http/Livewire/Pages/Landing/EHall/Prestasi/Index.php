<?php

namespace App\Http\Livewire\Pages\Landing\EHall\Prestasi;

use App\Models\Icon\EhallArticle;
use Livewire\Component;

class Index extends Component
{
    public $articles = [];
    public $currentThree;
    public $nextThree;

    public function render()
    {
        return view('livewire.pages.landing.e-hall.prestasi.index')->layout('layouts.landing');;
    }

    public function mount()
    {
        $count =  EhallArticle::count();
        $this->nextThree = EhallArticle::where('type', 'Prestasi')->take(3)->get();

        for ($i = 1; $i < floor($count / 3); $i++) {
            if ($i != 1) $this->nextThree = EhallArticle::where('type', 'Prestasi')->skip(3*$i)->take(3)->get();
            array_push(
                $this->articles,
                $this->nextThree
            );
            $this->currentThree = $this->nextThree;
        }
    }
}
