<?php

namespace App\Http\Livewire\Pages\Auth\Icon\Academy;

use Livewire\Component;
use App\Models\Bionix\City;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use App\Models\Icon\IconAcademyDataScienceData;
use App\Models\Icon\IconAcademyDataScienceMember;

class RegisterDataScience extends Component
{
    use WithFileUploads;

    public $cities;
    public $step = 1;
    public $isIdentityDone = false;
    public $isAkunDone = false;
    public $errorMessage;
    public $password, $re_password, $region = '1', $agree;

    public $members;

    public $team_name;
    public $institution_name;
    public $alasan, $harapkan, $lakukan;

    public $member_1_name, $member_2_name, $member_3_name;
    public $member_1_email, $member_2_email, $member_3_email;
    public $member_1_whatsapp, $member_2_whatsapp, $member_3_whatsapp;
    public $ktm_1, $ktm_2, $ktm_3;
    public $member_1_ig, $member_2_ig, $member_3_ig;
    public $member_1_twibbon, $member_2_twibbon, $member_3_twibbon;
    public $cv_1, $cv_2, $cv_3;

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
                $this->errorMessage = "Harap selesaikan tahap 2 terlebih dahulu";
            }
        }
    }

    public function identityTeamSubmit()
    {
        $this->validate([
            'team_name' => 'required',
            'institution_name' => 'required',
            'alasan' => 'required',
            'harapkan' => 'required',
            'lakukan' => 'required'
        ]);
        $this->isIdentityDone = true;
        $this->move(2);
    }

    public function akunSubmit()
    {
        $member3 = !empty($this->member_3_name) || !empty($this->member_3_email) || !empty($this->member_3_whatsapp) || !empty($this->ktm_3) || !empty($this->member_3_ig) || !empty($this->member_3_twibbon);

        $arr_validation = [];
        for($x = 1; $x <= 3; $x++)
        {
            // Member 1 and 2 required, 3 optional
            $required = ($x < 3) ? 'required|' : (($member3) ? 'required|' : '');

            if($x < 3 || $member3)
            {
                $arr_validation = array_merge($arr_validation, [
                    'member_'.$x.'_name' => $required . 'string',
                    'member_'.$x.'_email' => $required . 'email',
                    'member_'.$x.'_whatsapp' => $required . 'regex:/^(^08)\d{8,11}$/|max:14|string',
                    'ktm_'.$x => $required . 'image|max:2048', // 2MB Max
                    'member_'.$x.'_ig' => $required . 'string',
                    'member_'.$x.'_twibbon' => $required . 'string',
                    'cv_'.$x => $required . 'mimes:png,jpg,pdf|max:3072', // 3MB Max, allowed file ext: PNG, JPG, PDF
                ]);
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
        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }

        // Usai memvalidasi
        $this->isAkunDone = true;

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
            ${'team_member_'.$x} = IconAcademyDataScienceMember::create([
                'name' => $this->{'member_'.$x.'_name'},
                'email' => $this->{'member_'.$x.'_email'},
                'whatsapp' => $this->{'member_'.$x.'_whatsapp'},
                'link_twibbon' => $this->{'member_'.$x.'_ig'},
                'link_instagram' => $this->{'member_'.$x.'_twibbon'},
            ]);

            if(!is_string($this->{'ktm_'.$x}) && !is_string($this->{'cv_'.$x}))
            {
                $ktm = date('YmdHis') . '_ICON DSAcademy_' . $this->team_name . '_' . $x . '_KTM' . '.' . $this->{'ktm_'.$x}->getClientOriginalExtension();
                $cv = date('YmdHis') . '_ICON DSAcademy_' . $this->team_name . '_' . $x . '_CV' . '.' . $this->{'cv_'.$x}->getClientOriginalExtension();


                $resized_image_ktm = (new ImageManager())
                    ->make($this->{'ktm_'.$x})
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->{'ktm_'.$x}->getClientOriginalExtension());

                Storage::disk('public')
                    ->put('icon/' . $ktm,
                        $resized_image_ktm->__toString());

                $this->{'cv_'.$x}->storeAs("public/icon", $cv);

                ${'team_member_'.$x}->update([
                    'identity_card_path' => 'icon/' . $ktm,
                    'cv_path' => 'icon/'. $cv
                ]);
            }
        }

        // Menyimpan data tim pada database
        $team_data = IconAcademyDataScienceData::create([
            'team_name' => $this->team_name,
            'university_name' => $this->institution_name,
            'reason_joining' => $this->alasan,
            'expectation_joining_academy' => $this->harapkan,
            'post_activity' => $this->lakukan,
            'leader_id' => $team_member_1->id
        ]);

        // Menyimpan ID para anggota pada database
        for($x = 1; $x < $this->members; $x++)
        {
            $team_data->update([
                'member'.$x.'_id' => ${'team_member_' . ($x + 1)}->id
            ]);
        }

        // Auth::user()->userable->update([
        //     'icon_id' => $team_data->id,
        //     'icon_type' => 'App\Models\Icon\Academy\RegisterDataScience'
        // ]);

        return redirect()->to(route('register-dsacademy-success'));
    }

    public function mount(){
        $this->member_1_name = Auth::user()->name;
        $this->member_1_email = Auth::user()->email;
    }

    public function render()
    {
        return view('livewire.pages.auth.icon.academy.register-data-science')->layout('layouts.auth-bionix');
    }
}
