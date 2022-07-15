<?php

namespace App\Http\Livewire\Pages\Icon\Webinar\Peserta;

use Livewire\Component;

class PresensiSuccess extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.pages.icon.webinar.peserta.presensi-success');
    }

    public function mount($type){
        $this->message = $type == 'presensi' ? "Presensi Berhasil" : "Terima Kasih atas feedback yang sudah kamu berikan";
    }
}
