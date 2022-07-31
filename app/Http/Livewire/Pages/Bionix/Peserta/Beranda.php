<?php

namespace App\Http\Livewire\Pages\Bionix\Peserta;

use App\Models\Bionix\Announcement;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Beranda extends Component
{
    public $announcement;
    public $is_junior;

    public function mount(){
        $this->announcement = Announcement::where('start', '<=', Carbon::now())
        ->where('end', '>=', Carbon::now())
        ->where(function ($q) {
            $q->where('category', Auth::user()->userable->bionix_type == 'App\Models\Bionix\TeamJuniorData' ? 'Student' : 'College')
                ->orWhere('category', 'Both');
        })->get();

        $this->is_junior = Auth::user()->jenjang == 'SMA' ? true : false;
    }

    public function alert()
    {
        switch (\Auth::user()->userable->academy->profile_verif_status) {
            case 'Tahap Verifikasi':
                $this->alert_color = 'yellow';
                $this->alert_header = 'Identitas Sedang Dalam Tahap Verifikasi';
                $this->alert_content = 'Mohon tunggu beberapa saat hingga identitas anda diverifikasi oleh admin';
                $this->readonly = true;
                break;
            case 'Terverifikasi':
                $this->alert_color = 'green';
                $this->alert_header = 'Identitas Telah Terverifikasi';
                $this->alert_content = 'Selamat identitas anggota tim telah diverifikasi oleh Admin';
                $this->readonly = true;
                break;
            case 'Ditolak':
                $this->alert_color = 'red';
                $this->alert_header = 'Identitas Ditolak';
                $this->alert_content = 'Identitas ditolak karena alasan berikut : <b>' . \Auth::user()->userable->academy->profile_verif_comment . '</b>';
                $this->readonly = false;
                break;
            default:
                $this->alert_color = 'blue';
                $this->alert_header = 'Segera Lakukan Verifikasi Identitas';
                $this->alert_content = 'Lakukan pengajuan verifikasi identitas dengan melengkapi form di bawah. Pastikan bahwa semua data sudah terisi dengan benar. <b>Selama tahap verifikasi, data diri tidak dapat diubah.</b>';
                $this->readonly = false;
                break;
        }
    }


    public function render()
    {
        return view('livewire.pages.bionix.peserta.beranda')->layout('layouts.dashboard');
    }
}
