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
    public $status;
    public $ktm, $instagram, $twibbon;

    public function render()
    {
        return view('livewire.pages.auth.bionix.registrai-is-class')->layout('layouts.auth-bionix');
    }

     public function mount()
    {
        $this->namalengkap = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->whatsapp = Auth::user()->whatsapp;
        $this->info_pendaftaran = 'Media Sosial ISE! 2022';
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
            'info_pendaftaran' => 'required',
            'status' => 'required'
        ]);

        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }

        Storage::disk('public')->makeDirectory('isclass');
        $ktm = date('YmdHis') . '_ISCLASS_' . $this->team_name . '_KTM' . '.' . $this->ktm->getClientOriginalExtension();
        $instagram = date('YmdHis') . '_ISCLASS_' . $this->team_name . '_INSTAGRAM' . '.' . $this->instagram->getClientOriginalExtension();
        $twibbon = date('YmdHis') . '_ISCLASS_' . $this->team_name . '_TWIBBON' . '.' . $this->twibbon->getClientOriginalExtension();

        $kartu_pelajar_path = 'isclass/' . $ktm;
        $resized_image = (new ImageManager())
            ->make($this->ktm)
            ->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($this->kartu_pelajar->getClientOriginalExtension());

        Storage::disk('public')
            ->put(
                $kartu_pelajar_path,
                $resized_image->__toString()
            );

        $instagram_path = 'isclass/' . $instagram;
        $resized_image = (new ImageManager())
            ->make($this->instagram)
            ->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($this->instagram->getClientOriginalExtension());

        Storage::disk('public')
            ->put(
                $instagram_path,
                $resized_image->__toString()
            );

        $twibbon_path = 'isclass/' . $twibbon;
        $resized_image = (new ImageManager())
            ->make($this->twibbon)
            ->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($this->twibbon->getClientOriginalExtension());

        Storage::disk('public')
            ->put(
                $twibbon,
                $resized_image->__toString()
            );

        Auth::user()->update([
            'name' => $this->namalengkap,
            'email' => $this->email,
            'whatsapp' => $this->whatsapp
        ]);

        IsClassData::create([
            'member_id' => Auth::user()->userable->id,
            'info_source' => $this->info_pendaftaran,
            'identity_card_path' => $kartu_pelajar_path,
            'school_name' => $this->sekolah,
            'status' => $this->status,
            'twibbon_path' => $twibbon_path,
            'instagram_path' => $instagram_path,
        ]);
        return redirect(route('isclass.register-success'));
    }
}
