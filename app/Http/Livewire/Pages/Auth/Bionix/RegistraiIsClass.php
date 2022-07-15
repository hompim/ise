<?php

namespace App\Http\Livewire\Pages\Auth\Bionix;

use App\Models\Bionix\IsClassData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegistraiIsClass extends Component
{
    use WithFileUploads;

    public $namalengkap;
    public $email;
    public $whatsapp;
    public $sekolah;
    public $kartu_pelajar;
    public $info_pendaftaran;
    public $agree;
    public $step = 1;
    public $errorMessage;

    public function render()
    {
        return view('livewire.pages.auth.bionix.registrai-is-class')->layout('layouts.auth-bionix');
    }

    public function akunSubmit()
    {
        if (Auth::user()->userable->isclass) {
            $this->errorMessage = 'Anda sudah mendaftar Webinar Kick Off ISE! 2022';
            return;
        }
        $this->validate([
            'namalengkap' => 'required',
            'whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'sekolah' => 'required',
            'kartu_pelajar' => 'required|image|max:2048',
            'info_pendaftaran' => 'required'
        ]);

        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }

        Storage::disk('public')->makeDirectory('kartu_pelajar');
        $name = date('YmdHis') . '_isclass_' . $this->namalengkap . '.' . $this->kartu_pelajar->getClientOriginalExtension();
        $kartu_pelajar_path = 'kartu_pelajar/' . $name;
        $resized_image = (new ImageManager())
            ->make($this->kartu_pelajar)
            ->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($this->kartu_pelajar->getClientOriginalExtension());

        Storage::disk('public')
            ->put(
                $kartu_pelajar_path,
                $resized_image->__toString()
            );

        Auth::user()->update([
            'namalengkap' => $this->namalengkap,
            'email' => $this->email,
            'whatsapp' => $this->whatsapp,
            'sekolah' => $this->sekolah,
            'kartu_pelajar' => $this->kartu_pelajar,
            
        ]);


        IsClassData::create([
            'member_id' => Auth::user()->userable_id,
            'info_pendaftaran' => $this->info_pendaftaran,
            'kartu_pelajar_path' => $kartu_pelajar_path
        ]);
        return redirect(route('isclass.register-success'));
    }
}
