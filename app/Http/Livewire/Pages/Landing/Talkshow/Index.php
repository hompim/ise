<?php

namespace App\Http\Livewire\Pages\Landing\Talkshow;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.landing.talkshow.index')->layout('layouts.landing');
    }
}
