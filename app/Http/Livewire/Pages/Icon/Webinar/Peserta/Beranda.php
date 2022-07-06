<?php

namespace App\Http\Livewire\Pages\Icon\Webinar\Peserta;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Beranda extends Component
{
    public $name,$email,$whatsapp, $link;

    public $notif = true;

    public function render()
    {
        return view('livewire.pages.icon.webinar.peserta.beranda')->layout('layouts.dashboard');
    }

    public function mount(){
        $this->statusNotification();
    }

    public function statusNotification()
    {
        $this->alert_color = 'blue';

        $this->alert_content = 'Informasi link zoom akan diberikan tanggal <b>13 Juli 2022</b> melalui laman website ISE 2022 dan Email peserta yang telah didaftarkan.';

        $this->alert_header =  'Link Zoom Webinar Kick Off 2022';
    }

    public function closeNotif(){
        $this->notif = false;
    }
}
