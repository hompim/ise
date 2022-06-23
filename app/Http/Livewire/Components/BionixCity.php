<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class BionixCity extends Component
{
    public function render()
    {
        return view('livewire.components.bionix-city')->layout('layouts.landing');
    }
}
