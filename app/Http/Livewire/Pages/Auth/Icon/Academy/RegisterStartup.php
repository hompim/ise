<?php

namespace App\Http\Livewire\Pages\Auth\Icon\Academy;

use App\Models\Icon\IconAcademyStartupData;
use App\Models\Icon\IconAcademyStartupMember;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterStartup extends Component
{
    use WithFileUploads;

    public $step = 1;
    public $isIdentityDone = false;
    public $isTeamDone = false;
    public $errorMessage;
    public $setuju_data_benar, $setuju_ide_tim;

    public $members;

    public $member_1_name, $member_2_name, $member_3_name;
    public $member_1_universitas, $member_2_universitas, $member_3_universitas;
    public $ktm_1, $ktm_2, $ktm_3;
    public $member_1_whatsapp, $member_2_whatsapp, $member_3_whatsapp;
    public $member_1_email, $member_2_email, $member_3_email;
    public $member_1_ig, $member_2_ig, $member_3_ig;
    public $member_1_twibbon, $member_2_twibbon, $member_3_twibbon;
    public $member_1_linkedin, $member_2_linkedin, $member_3_linkedin;
    public $member_1_twitter, $member_2_twitter, $member_3_twitter;

    public $team_name, $judul_bisnis, $deskripsi;

    public function move($toStep)
    {
        if ($toStep == 1) {
            $this->step = $toStep;
            $this->errorMessage = '';
        } elseif ($toStep == 2) {
            if ($this->isIdentityDone ) {
                $this->step = $toStep;
                $this->errorMessage = '';
            } else {
                $this->errorMessage = "Harap selesaikan tahap 1 terlebih dahulu";
            }
        } elseif ($toStep == 3) {
            if ($this->isTeamDone ) {
                $this->step = $toStep;
                $this->errorMessage = '';
            } else {
                $this->errorMessage = "Harap selesaikan tahap 2 terlebih dahulu";
            }
        }
    }

    public function identityTeamSubmit()
    {
        // Mengecek 300 kata 
        $jumlahkata = count(explode(' ', $this->deskripsi));

        // Mengecek 300 kata
        if ($jumlahkata > 300) {
            $this->errorMessage = 'Maksimum kata untuk deskripsi ide bisnis adalah 300';
            return;
        }

        $this->validate([
            'team_name' => 'required|max:15',
            'judul_bisnis' => 'required|max:20',
            'deskripsi' => 'required'
        ]);

        // Jika agree belum diceklis maka tampilkan error message
        if (!$this->setuju_ide_tim) {
            $this->errorMessage = 'Tolong setujui bahwa ide bisnis anda belum pernah dilombakan maupun dijalankan sebelumnya';
            return;
        }

        $this->isTeamDone = true;

        $this->move(3);
    }

    public function identityMemberSubmit()
    {
        $member3 = !empty($this->member_3_name) || !empty($this->member_3_universitas) || !empty($this->ktm_3) || !empty($this->member_3_whatsapp) || !empty($this->member_3_email) || !empty($this->member_3_ig) || !empty($this->member_3_twibbon) || !empty($this->member_3_linkedin) || !empty($this->member_3_twitter);
        
        $arr_validation = [];
        for($x = 1; $x <= 3; $x++)
        {
            // Member 1 and 2 required, 3 optional
            $required = ($x < 3) ? 'required|' : (($member3) ? 'required|' : '');

            if($x < 3 || $member3)
            {
                $arr_validation = array_merge($arr_validation, [
                    'member_'.$x.'_name' => $required . 'string',
                    'member_'.$x.'_universitas' => $required . 'string',
                    'ktm_'.$x => $required . 'image|max:2048',
                    'member_'.$x.'_whatsapp' => $required . 'regex:/^(^\+628)\d{8,11}$/|max:14|string',
                    'member_'.$x.'_email' => $required . 'email',
                    'member_'.$x.'_ig' => $required . 'string',
                    'member_'.$x.'_twibbon' => $required . 'string',
                ]);

                if(!empty($this->{'member_'.$x.'_linkedin'}))
                {
                    $arr_validation = array_merge($arr_validation, [
                        'member_'.$x.'_linkedin' => 'string',
                    ]);
                }

                if(!empty($this->{'member_'.$x.'_twitter'}))
                {
                    $arr_validation = array_merge($arr_validation, [
                        'member_'.$x.'_twitter' => 'string',
                    ]);
                }
            }
        }

        $this->validate($arr_validation);

        // Menghitung jumlah member yang daftar
        $this->members = 2;
        if($member3)
        {
            $this->members = 3;
        }

        // Apabila ada member yang menggunakan email sama
        if ($this->member_1_email == $this->member_2_email || $this->member_1_email == $this->member_3_email || $this->member_2_email == $this->member_3_email) {
            $this->errorMessage = "Email para peserta tidak boleh sama";
            return;
        }

        // Jika agree belum diceklis maka tampilkan error message
        if (!$this->setuju_data_benar) {
            $this->errorMessage = 'Tolong setujui semua data yang diisi benar dan bisa dipertanggungjawabkan';
            return;
        }
        
        $this->isIdentityDone = true;
        $this->move(2);
    }

    public function registerSubmit()
    {
        // Create new dir
        Storage::disk('public')->makeDirectory('icon');

        // Update data peserta1 jika berubah
        Auth::user()->update([
            'name' => $this->member_1_name,
            'no_hp' => $this->member_1_whatsapp
        ]);

        // Simpan data ke database
        $team_member_1 = null;
        $team_member_2 = null;
        $team_member_3 = null;
        for($x = 1; $x <= $this->members; $x++)
        {
            ${'team_member_'.$x} = IconAcademyStartupMember::create([
                'name' => $this->{'member_'.$x.'_name'},
                'university' => $this->{'member_'.$x.'_universitas'},
                'email' => $this->{'member_'.$x.'_email'},
                'whatsapp' => $this->{'member_'.$x.'_whatsapp'},
                'link_twibbon' => $this->{'member_'.$x.'_twibbon'},
                'link_instagram' => $this->{'member_'.$x.'_ig'},
                'link_linkedin' => $this->{'member_'.$x.'_linkedin'},
                'link_twitter'  => $this->{'member_'.$x.'_twitter'},
            ]);

            if(!is_string($this->{'ktm_'.$x}))
            {
                $ktm = date('YmdHis') . '_ICON StartupAcademy_' . $this->team_name . '_' . $x . '_KTM' . '.' . $this->{'ktm_'.$x}->getClientOriginalExtension();

                $resized_image_ktm = (new ImageManager())
                    ->make($this->{'ktm_'.$x})
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->{'ktm_'.$x}->getClientOriginalExtension());

                Storage::disk('public')
                    ->put('icon/' . $ktm,
                        $resized_image_ktm->__toString());

                ${'team_member_'.$x}->update([
                    'identity_card_path' => 'icon/' . $ktm,
                ]);
            }
        }

        // Menyimpan data tim pada database
        $team_data = IconAcademyStartupData::create([
            'team_name' => $this->team_name,
            'institute_name' => $this->member_1_universitas,
            'startup_idea_title' => $this->judul_bisnis,
            'startup_idea_desc' => $this->deskripsi,
            'leader_id' => $team_member_1->id,
            'member1_id' => $team_member_2->id
        ]);

        // Menyimpan ID para anggota pada database
        if(!is_null($team_member_3))
        {
            $team_data->update([
                'member2_id' => $team_member_3->id
            ]);
        }

        // Auth::user()->userable->update([
        //     'icon_id' => $team_data->id,
        //     'icon_type' => 'App\Models\Icon\Academy\RegisterDataScience'
        // ]);

        return redirect()->to(route('register-startupacademy-success'));
    }

    public function mount(){
        $this->member_1_name = Auth::user()->name;
        $this->member_1_email = Auth::user()->email;
    }
    
    public function render()
    {
        return view('livewire.pages.auth.icon.academy.register-startup')->layout('layouts.auth-bionix');;
    }
}
