<?php

namespace App\Http\Livewire\Pages\Auth\Bionix;

use Livewire\Component;

class RegistraiIsClass extends Component
{
    public $step = 1;
    public $errorMessage;

    public function render()
    {
        return view('livewire.pages.auth.bionix.registrai-is-class')->layout('layouts.auth-bionix');
    }
}
