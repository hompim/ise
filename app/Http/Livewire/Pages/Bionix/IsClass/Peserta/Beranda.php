<?php

namespace App\Http\Livewire\Pages\Bionix\IsClass\Peserta;

use App\Models\Bionix\Announcement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class Beranda extends Component
{
    use WithFileUploads;

    public $announcement;
    public $jenisKartu,
        $alreadyDeadline,
        $alert_color,
        $alert_content,
        $alert_header,
        $readonly;

    public $name, $email, $whatsapp, $class, $photo1, $school;
    public $twibbon;
    public $instagram;
    public $is_edit, $notif = true, $errorMessage, $photoUpdate = false, $twibbonUpdate = false, $instagramUpdate = false;

    public function render()
    {
        return view('livewire.pages.bionix.is-class.peserta.beranda')->layout('layouts.dashboard');
    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->whatsapp = Auth::user()->whatsapp;
        $this->class = Auth::user()->userable->isclass->status;
        $this->photo1 = Auth::user()->userable->isclass->identity_card_path;
        $this->twibbon = Auth::user()->userable->isclass->twibbon_path;
        $this->instagram = Auth::user()->userable->isclass->instagram_path;
        $this->announcement = Announcement::all();

        $this->statusNotification();
    }

    public function statusNotification()
    {
        $this->jenisKartu = "kartu pelajar";

        $this->alert_color = Auth::user()->userable->isclass->profile_verif_status == 'Tahap Verifikasi' ? 'blue'
            : (Auth::user()->userable->isclass->profile_verif_status == 'Terverifikasi' ? 'blue'
                : (Auth::user()->userable->isclass->profile_verif_status == 'Ditolak' ? 'red'
                    : 'blue'));

        $this->alert_content = Auth::user()->userable->isclass->profile_verif_status == 'Tahap Verifikasi' ? 'Mohon tunggu beberapa saat hingga identitas anda diverifikasi oleh admin'
            : (Auth::user()->userable->isclass->profile_verif_status == 'Terverifikasi' ?  'Selamat identitas anda sudah dikonfirmasi oleh admin ISE, Anda sudah resmi terdaftar sebagai peserta IS Class ISE! 2022.'
                : (Auth::user()->userable->isclass->profile_verif_status == 'Ditolak' ? 'Identitas anda ditolak karena alasan berikut : ' . Auth::user()->userable->isclass->profile_verif_comment
                    : 'Lakukan pengajuan verifikasi identitas anda dengan melengkapi form di bawah. Pastikan bahwa semua data sudah terisi dengan benar. <b>Selama tahap verifikasi, data diri tidak dapat diubah.</b>'));

        $this->alert_header =  Auth::user()->userable->isclass->profile_verif_status == 'Tahap Verifikasi' ? 'Identitas anda Sedang Dalam Tahap Verifikasi'
            : (Auth::user()->userable->isclass->profile_verif_status == 'Terverifikasi' ? 'Identitas anda Telah Terverifikasi'
                : (Auth::user()->userable->isclass->profile_verif_status == 'Ditolak' ? 'Identitas anda Ditolak'
                    : 'Segera Lakukan Verifikasi Identitas anda Anda'));
    }

    public function toEditMode()
    {
        $this->is_edit = true;
    }

    public function closeNotif()
    {
        $this->notif = false;
    }

    public function updatedPhoto1()
    {
        $this->photoUpdate = true;
    }
    public function updatedTwibbon()
    {
        $this->twibbonUpdate = true;
    }
    public function updatedInstagram()
    {
        $this->instagramUpdate = true;
    }

    public function saveData()
    {
        $this->validate([
            'name' => 'required',
            'whatsapp' => 'required',
            'class' => 'required'
        ]);

        Auth::user()->update([
            'name' => $this->name,
            'whatsapp' => $this->whatsapp
        ]);

        Auth::user()->userable->isclass->update([
            'status' => $this->class
        ]);

        if ($this->photoUpdate) {
            $this->validate([
                'photo1' => 'required|image|max:2048',
            ]);

            Storage::disk('public')->makeDirectory('isclass');
            $ktm = date('YmdHis') . '_ISCLASS_' . $this->name . '_KTM' . '.' . $this->photo1->getClientOriginalExtension();

            $kartu_pelajar_path = 'isclass/' . $ktm;
            $resized_image = (new ImageManager())
                ->make($this->photo1)
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode($this->photo1->getClientOriginalExtension());

            Storage::disk('public')
                ->put(
                    $kartu_pelajar_path,
                    $resized_image->__toString()
                );

            Auth::user()->userable->isclass->update([
                'identity_card_path' => $kartu_pelajar_path
            ]);
        }

        if ($this->instagramUpdate) {
            $instagram = date('YmdHis') . '_ISCLASS_' . $this->name . '_INSTAGRAM' . '.' . $this->instagram->getClientOriginalExtension();

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

            Auth::user()->userable->isclass->update([
                'instagram_path' => $instagram_path
            ]);
        }

        if ($this->twibbonUpdate) {
            $twibbon = date('YmdHis') . '_ISCLASS_' . $this->name . '_TWIBBON' . '.' . $this->twibbon->getClientOriginalExtension();

            $twibbon_path = 'isclass/' . $twibbon;
            $resized_image = (new ImageManager())
                ->make($this->twibbon)
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode($this->twibbon->getClientOriginalExtension());

            Storage::disk('public')
                ->put(
                    $twibbon_path,
                    $resized_image->__toString()
                );

            Auth::user()->userable->isclass->update([
                'twibbon_path' => $twibbon_path
            ]);
        }

        $this->is_edit = false;
    }

    public function applyVerification()
    {
        Auth::user()->userable->isclass->update([
            'profile_verif_status' => 'Tahap Verifikasi'
        ]);

        $this->statusNotification();
    }

    public function closeModal()
    {
        $this->errorMessage = '';
    }
}
