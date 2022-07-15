<?php

namespace App\Http\Livewire\Pages\Icon\Webinar\Peserta;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Presensi extends Component
{
    public $name, $email, $whatsapp, $school, $errorMessage;

    public function mount(){
        if(Auth::user()->userable->webinar->presensi_status){
            return redirect(route('webinar.peserta.beranda'));
        }

        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->whatsapp = Auth::user()->whatsapp;
    }

    public function presensiSubmit(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'school' => 'required'
        ]);

        Auth::user()->userable->webinar->update([
            'school_name' => $this->school,
            'presensi_status' => true
        ]);

        return redirect()->to(route('webinar.peserta.success', ['type' => 'presensi']));
    }

    public function render()
    {
        return view('livewire.pages.icon.webinar.peserta.presensi')->layout('layouts.auth-bionix');
    }
}
