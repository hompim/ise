<?php

namespace App\Http\Livewire\Pages\Icon\Webinar\Peserta;

use App\Models\Icon\IconWebinarKickOffFeedback;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Feedback extends Component
{

    public $errorMessage;
    public $name, $email ,$penyampaian_materi, $pemahaman_materi, $pelaksanaan, $kepuasan, $kritik, $saran;

    public function render()
    {
        return view('livewire.pages.icon.webinar.peserta.feedback')->layout('layouts.auth-bionix');

    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function feedbackSubmit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'penyampaian_materi' => 'required',
            'pemahaman_materi' => 'required',
            'pelaksanaan' =>  'required',
            'kepuasan' => 'required'
        ]);

        IconWebinarKickOffFeedback::create([
            'webinar_id' => Auth::user()->userable->webinar->id,
            'penyampaian_materi' => $this->penyampaian_materi,
            'pemahaman_materi' => $this->pemahaman_materi,
            'keseluruhan_pelaksanaan' =>  $this->pelaksanaan,
            'kepuasan' => $this->kepuasan,
            'kritik' => $this->kritik,
            'saran' => $this->saran
        ]);

        return redirect()->to(route('webinar.peserta.success', ['type' => 'feedback']));
    }

}
