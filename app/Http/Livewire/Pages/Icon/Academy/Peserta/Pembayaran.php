<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Peserta;

use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class Pembayaran extends Component
{
    use WithFileUploads;

    public $image;
    public $payment_price;
    public $alert_color, $alert_header,$alert_content;

    public function save()
    {
        $this->validate([
            'image' => 'image|max:2048', // 2MB Max
        ]);
        Storage::disk('public')->makeDirectory('bukti_bayar');
        $name = date('YmdHis') . '_' . Auth::user()->userable->academy->team_name . '.' . $this->image->getClientOriginalExtension();
        $resized_image = (new ImageManager())
            ->make($this->image)
            ->resize(700, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($this->image->getClientOriginalExtension());
        Storage::disk('public')
            ->put('bukti_bayar/' . $name,
                $resized_image->__toString());

        Auth::user()->userable->academy->update([
            'commitement_payment_path' => 'bukti_bayar/' . $name,
            'commitement_payment_status' => 'Tahap Verifikasi'
        ]);
    }

    public function statusNotification()
    {

        $this->alert_color = Auth::user()->userable->academy->commitement_payment_status == 'Tahap Verifikasi' ? 'purple'
            : (Auth::user()->userable->academy->commitement_payment_status == 'Terverifikasi' ? 'green'
                : (Auth::user()->userable->academy->commitement_payment_status == 'Ditolak' ? 'red'
                    : 'blue'));

        $this->alert_content = Auth::user()->userable->academy->commitement_payment_status == 'Tahap Verifikasi' ? 'Mohon tunggu beberapa saat hingga pembayaran anda diverifikasi oleh admin'
            : (Auth::user()->userable->academy->commitement_payment_status == 'Terverifikasi' ? ($this->is_junior ? 'Selamat pembayaran anda sudah diverifiksi. Silahkan menunggu info selanjutnya dari kami.' : 'Selanjutnya anda dapat mengikuti tahap penyisihan.')
                : (Auth::user()->userable->academy->commitement_payment_status == 'Ditolak' ? 'Pembayaran Anda ditolak karena alasan berikut : ' . Auth::user()->userable->bionix->payment_verif_comment
                    : 'Lakukan pengajuan verifikasi Pembayaran Anda dengan mengupload bukti pembayaran sesuai dengan jumlah pembayaran.'));

        $this->alert_header =  Auth::user()->userable->academy->commitement_payment_status == 'Tahap Verifikasi' ? 'Pembayaran Anda Sedang Dalam Tahap Verifikasi'
            : (Auth::user()->userable->academy->commitement_payment_status == 'Terverifikasi' ? 'Pembayaran Anda Telah Terverifikasi'
                : (Auth::user()->userable->academy->commitement_payment_status == 'Ditolak' ? 'Pembayaran Anda Ditolak'
                    : 'Segera Lakukan Verifikasi Pembayaran Anda Anda'));
    }

    public function closeMessage()
    {
        session()->remove('error');
    }

    public function mount(){
        $this->statusNotification();
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.peserta.pembayaran')->layout('layouts.dashboard');
    }
}
