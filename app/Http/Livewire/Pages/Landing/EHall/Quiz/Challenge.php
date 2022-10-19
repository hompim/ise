<?php

namespace App\Http\Livewire\Pages\Landing\EHall\Quiz;

use App\Models\Icon\EhallChallage;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Challenge extends Component
{
    use WithFileUploads;

    public $ss_path;

    public function render()
    {
        return view('livewire.pages.landing.e-hall.quiz.challenge')->layout('layouts.landing');;
    }

    public function submit()
    {
        $this->validate([
            'ss_path' => 'required|image|max:2048',
        ]);

        $name = date('YmdHis') . '_EHALL_CHALLAGE_' . Auth::user()->name . '.' . $this->ss_path->getClientOriginalExtension();
        $this->ss_path->storeAs('ehall_challage', $name, 'public');
        $path = 'ehall_challage/' . $name;

        $challege = EhallChallage::create([
            'member_id' => Auth::user()->userable->id,
            'ss_path' => $path,
        ]);

        Auth::user()->userable->increment('hois_point', 250);
        $this->emit('success', 'Challenge has been sent!');
    }
}
