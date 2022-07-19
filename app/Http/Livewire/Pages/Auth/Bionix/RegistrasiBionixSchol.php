<?php

namespace App\Http\Livewire\Pages\Auth\Bionix;

use App\Http\Livewire\Components\BionixCity;
use App\Models\Bionix\BionixSchool;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class RegistrasiBionixSchol extends ModalComponent
{

    public $schools;
    public $school_bionix;

    public function mount(){
        $this->schools = BionixSchool::all();
    }

    public function submitSchool(){
        $this->validate([
            'school_bionix' => 'required'
        ]);

        Auth::user()->userable->update([
            'roadshow_school_id' => $this->school_bionix
        ]);

        return redirect()->to(route('pembayaran-roadshow'));
    }

    public function render()
    {
        return view('livewire.pages.auth.bionix.registrasi-bionix-schol');
    }
}
