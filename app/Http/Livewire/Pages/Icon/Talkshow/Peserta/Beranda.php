<?php

namespace App\Http\Livewire\Pages\Icon\Talkshow\Peserta;

use Livewire\Component;

class Beranda extends Component
{
    public $name, $email, $whatsapp, $link, $is_event_today;

    public $notif = true;

    public function render()
    {
        return view('livewire.pages.icon.talkshow.peserta.beranda')->layout('layouts.dashboard');
    }

    public function mount()
    {
        $this->is_event_today = date('Y-m-d') >= date('Y-m-d', strtotime('2022-11-01')) ? true : false;

        $this->statusNotification();
    }

    public function statusNotification()
    {
        $this->alert_color = 'blue';

        $this->alert_content = $this->is_event_today ? 'Hi Peserta Webinar Kick-Off ISE! 2022, Join Zoom menggunakan link yang tersedia dan jangan lupa mengisi form presensi. Di akhir acara luangkan waktumu untuk mengisi feedback Webinar Kick-off ISE! 2022, Saran dan kritikmu sangat membantu untuk kami. Selamat menikmati Webinar Kick-Off ISE! 2022 ' : 'Informasi link zoom akan disampaikan melalui laman website ISE 2022 dan Email peserta yang telah didaftarkan.';

        $this->alert_header =  $this->is_event_today ? 'D-Day!' : "Link Zoom Grand Talkshow 2022";
    }

    public function closeNotif()
    {
        $this->notif = false;
    }
}
