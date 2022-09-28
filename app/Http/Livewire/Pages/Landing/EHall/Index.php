<?php

namespace App\Http\Livewire\Pages\Landing\EHall;

use App\Models\Member;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.landing.e-hall.index')->layout('layouts.landing');
    }

    public function mount(){
        $this->leaderboard = Member::orderBy('hois_point', 'desc')->orderBy('created_at', 'asc')->take(3)->get();
    }
}
