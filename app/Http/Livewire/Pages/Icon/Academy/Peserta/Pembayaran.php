<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Peserta;

use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Component;

class Pembayaran extends Component
{
    public $image;
    public $payment_price;

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

    public function closeMessage()
    {
        session()->remove('error');
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.peserta.pembayaran');
    }
}
