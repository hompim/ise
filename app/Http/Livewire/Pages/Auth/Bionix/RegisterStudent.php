<?php

namespace App\Http\Livewire\Pages\Auth\Bionix;

use Livewire\Component;

class RegisterStudent extends Component
{
    public function render()
    {
        return view('livewire.pages.auth.bionix.register-student')->layout('layouts.auth-bionix');
    }
}
