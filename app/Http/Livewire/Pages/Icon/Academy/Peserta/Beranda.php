<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Peserta;

use App\Models\Bionix\Announcement;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Beranda extends Component
{

    public $announcement;
    public bool $notif;
    public string $alert_color;
    public string $alert_content;
    public string $alert_header;
    public bool $readonly;

    public function mount()
    {
        $this->notif = true;
        $this->announcement = Announcement::where('start', '<=', Carbon::now())
            ->where('end', '>=', Carbon::now())
            ->where(function ($q) {
                $q->where('category', (Auth::user()->userable->academy_type == 'App\Models\Icon\IconAcademyStartupData' ? 'Startup' : 'Data Science'))
                    ->orWhere('category', 'All Academy');
            })
            ->get();
        $this->alert();
    }

    public function closeNotif()
    {
        $this->notif = false;
    }

    public function Accept()
    {
        Auth::user()->userable->academy->update([
            'competition_round' => 'Commitement Fee'
        ]);

        $this->alert();
    }

    public function Reject()
    {
        Auth::user()->userable->academy->update([
            'competition_round' => 'Rejected'
        ]);
        $this->alert();
    }

    public function alert()
    {
        switch (Auth::user()->userable->academy->competition_round) {
            case 'Administrasi':
                $this->alert_color = 'blue';
                $this->alert_header = 'Tim Anda dalam tahap proses seleksi berkas';
                $this->alert_content = 'Hai Metazen, selamat kamu telah berhasil mendaftarkan diri di ISE Academy 2022. Saat ini admin sedang melakukan proses seleksi berkas, hasil seleksi akan diumumkan pada tanggal 28 Agustus 2022.';
                $this->readonly = true;
                break;
            case 'Pending':
                $this->alert_color = 'green';
                $this->alert_header = 'Tim Anda lolos tahap seleksi berkas';
                $this->alert_content = 'Selamat Tim anda telah lolos dalam tahap seleksi berkas, selanjutnya silahkan konfirmasi apakah kamu akan melanjutkan ISE! Academy 2022';
                $this->readonly = false;
                break;
            case 'Rejected':
                $this->alert_color = 'red';
                $this->alert_header = 'Tim Anda tidak lolos';
                $this->alert_content = 'Mohon Maaf, Tim anda tidak lolos seleksi berkas';
                $this->readonly = false;
                break;
            case 'Seleksi':
                $this->alert_color = 'blue';
                $this->alert_header = 'Tim Anda lolos tahap seleksi berkas';
                $this->alert_content = 'Selamat Tim anda lolos seleksi berkas, selanjutnya akan diadakan seleksi tulis yang berlangsung pada tanggal 28 Agustus.';
                $this->readonly = false;
                break;
            case 'Commitement Fee':
                $this->alert_color = 'blue';
                $this->alert_header = 'Pembayaran Commitment Fee';
                $this->alert_content = 'Sebelum melanjutkan, setiap Tim Academy ISE! 2022 wajib terlebih dahulu membayar commitment fee pada menu pembayaran';
                $this->readonly = false;
                break;
            case 'Penyisihan':
                $this->alert_color = 'blue';
                $this->alert_header = 'Penyisihan';
                $this->alert_content = 'Tim anda berapa pada tahap penyisihan Academy ISE! 2022,  tunggu info lebih lanjut dari kami melalui media sosiao resmi ISE! 2022';
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
        return view('livewire.pages.icon.academy.peserta.beranda')->layout('layouts.dashboard');
    }
}
