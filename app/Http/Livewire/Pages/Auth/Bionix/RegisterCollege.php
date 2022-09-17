<?php

namespace App\Http\Livewire\Pages\Auth\Bionix;

use App\Models\Bionix\City;
use App\Models\Bionix\TeamSeniorData;
use App\Models\Bionix\TeamSeniorMember;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;

class RegisterCollege extends Component
{

    use WithFileUploads;

    public $cities;
    public $step = 1;
    public $isIdentityDone = false;
    public $isAnggotaDone = false;
    public $isAkunDone = false;
    public $errorMessage;
    public $team_name,
        $info_source,
        $judul_ide_bisnis,
        $bmc,
        $city,
        $member_1_name,
        $member_2_name,
        $member_3_name,
        $member_4_name,
        $member_5_name,
        $member_1_email,
        $member_2_email,
        $member_3_email,
        $member_4_email,
        $member_5_email,
        $member_1_whatsapp,
        $member_2_whatsapp,
        $member_3_whatsapp,
        $member_4_whatsapp,
        $member_5_whatsapp,
        $member_1_ktm,
        $member_2_ktm,
        $member_3_ktm,
        $member_4_ktm,
        $member_5_ktm,
        $member_1_university,
        $member_2_university,
        $member_3_university,
        $member_4_university,
        $member_5_university,
        $agree,
        $member_1_twibbon,
        $member_2_twibbon,
        $member_3_twibbon,
        $member_4_twibbon,
        $member_5_twibbon,
        $member_1_instagram,
        $member_2_instagram,
        $member_3_instagram,
        $member_4_instagram,
        $member_5_instagram,
        $member_1_major,
        $member_2_major,
        $member_3_major,
        $member_4_major,
        $member_5_major,
        $member_1_year,
        $member_2_year,
        $member_3_year,
        $member_4_year,
        $member_5_year;
    public $with_member_4 = false, $with_member_5 = false;

    public function move($toStep)
    {
        if ($toStep == 1) {
            $this->step = $toStep;
            $this->errorMessage = '';
        } elseif ($toStep == 2) {
            if ($this->isIdentityDone) {
                $this->step = $toStep;
                $this->errorMessage = '';
            } else {
                $this->errorMessage = "Harap selesaikan tahap 1 terlebih dahulu";
            }
        } elseif ($toStep == 3) {
            if ($this->isAnggotaDone) {
                $this->step = $toStep;
                $this->errorMessage = '';
            } else {
                $this->errorMessage = "Harap selesaikan tahap 2 terlebih dahulu";
            }
        }
    }


    public function identityTeamSubmit()
    {
        $validatedData = $this->validate([
            'team_name' => 'required',
            'judul_ide_bisnis' => 'required',
            // 'bmc' => 'required|mimes:pdf|max:3072',
            'city' => 'required'
        ]);
        $this->isIdentityDone = true;
        $this->move(2);
    }

    public function anggotaTeamSubmit()
    {
        $validatedData = $this->validate([
            'member_1_name' => 'required',
            'member_2_name' => 'required',
            'member_3_name' => 'required',
            'member_1_email' => 'required|email',
            'member_2_email' => 'required|email|unique:team_senior_members,email',
            'member_3_email' => 'required|email|unique:team_senior_members,email',
            'member_1_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'member_2_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'member_3_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'member_1_twibbon' => 'required',
            'member_2_twibbon' => 'required',
            'member_3_twibbon' => 'required',
        ]);
        if (($this->member_1_email == $this->member_2_email) || ($this->member_1_email == $this->member_3_email) || $this->member_3_email == $this->member_2_email) {
            $this->errorMessage = "Email masing-masing peserta tidak boleh sama";
            return;
        }
        $this->isAnggotaDone = true;
        $this->move(3);
    }
    public function akunSubmit()
    {
        $arr_validation = [
            'team_name' => 'required',
            'judul_ide_bisnis' => 'required',
            // 'bmc' => 'required|mimes:pdf|max:3072',
            'city' => 'required',
            'member_1_name' => 'required',
            'member_1_email' => 'required|email|unique:team_senior_members,email|unique:team_junior_members,email',
            'member_1_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
            'member_1_twibbon' => 'required',
            'member_1_year' => 'required',
            'member_1_major' => 'required|string',
            'member_1_university' => 'required|string',
            'member_1_instagram' => 'required'
        ];

        for ($x = 2; $x <= 5; $x++) {
            if ($this->{'member_' . $x . '_email'} || $this->{'member_' . $x . '_name'} || $this->{'member_' . $x . '_twibbon'} || $this->{'member_' . $x . '_whatsapp'} || $this->{'member_' . $x . '_year'} || $this->{'member_' . $x . '_major'}) {
                $arr_validation = array_merge($arr_validation, [
                    'member_' . $x . '_name' => 'required',
                    'member_' . $x . '_email' => 'required|email|unique:team_senior_members,email|unique:team_junior_members,email',
                    'member_' . $x . '_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
                    'member_' . $x . '_twibbon' => 'required',
                    'member_' . $x . '_year' => 'required',
                    'member_' . $x . '_major' => 'required|string',
                    'member_' . $x . '_university' => 'required|string',
                    'member_' . $x . '_instagram' => 'required|string',
                ]);
                if ($x == 4) $this->with_member_4 = true;
                if ($x == 5) $this->with_member_5 = true;
            }
        }

        $this->validate($arr_validation);

        for ($x = 1; $x <= 2; $x++) {
            for ($y = $x + 1; $y <= 3; $y++) {
                if (($this->{'member_' . $x . '_email'} == $this->{'member_' . $y . '_email'})) {
                    $this->errorMessage = "Email masing-masing peserta tidak boleh sama";
                    return;
                }
            }
        }

        if($this->with_member_4){
            for ($i=1; $i < 4; $i++) {
                if (($this->{'member_' . $x . '_email'} == $this->member_4_email)) {
                    $this->errorMessage = "Email masing-masing peserta tidak boleh sama";
                    return;
                }
            }
        }
        if($this->with_member_5){
            for ($i=1; $i < 5; $i++) {
                if (($this->{'member_' . $x . '_email'} == $this->member_5_email)) {
                    $this->errorMessage = "Email masing-masing peserta tidak boleh sama";
                    return;
                }
            }
        }

        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }

        $this->isAkunDone = true;
        //            masukin ke database di sini bikin create
        Auth::user()->update([
            'name' => $this->member_1_name,
            'whatsapp' => $this->member_1_whatsapp
        ]);

            // $bmc = date('YmdHis') . '_BIONIX COLLEGE_' . $this->team_name . '_BMC' . '.' . $this->bmc->getClientOriginalExtension();
            // $this->bmc->storeAs("public/bionix", $bmc);

            $team_data = TeamSeniorData::create([
                'team_name' => $this->team_name,
                'info_source' => $this->info_source,
                // 'bmc_file_path' => 'bionix/'.$bmc,
                'judul_ide_bisnis' => $this->judul_ide_bisnis,
                'city_id' => $this->city,
            ]);


        for ($x = 1; $x <= 3; $x++) {
            ${'team_member_' . $x} =  TeamSeniorMember::create([
                'name' => $this->{'member_' . $x . '_name'},
                'email' => $this->{'member_' . $x . '_email'},
                'whatsapp' => $this->{'member_' . $x . '_whatsapp'},
                'year' => $this->{'member_' . $x . '_year'},
                'major' => $this->{'member_' . $x . '_major'},
                'twibbon' => $this->{'member_' . $x . '_twibbon'},
                'university' => $this->{'member_' . $x . '_university'},
                'instagram' => $this->{'member_' . $x . '_instagram'},
                'team_id' => $team_data->id,
                'is_leader' => $x == 1 ? true : false
            ]);

            $ktm = date('YmdHis') . '_BIONIX COLLEGE_' . $this->team_name . '_' . $x . '_KTM' . '.' . $this->{'member_' . $x . '_ktm'}->getClientOriginalExtension();

            $resized_image_ktm = (new ImageManager())
                ->make($this->{'member_' . $x . '_ktm'})
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode($this->{'member_' . $x . '_ktm'}->getClientOriginalExtension());

            Storage::disk('public')
                ->put(
                    'bionix/' . $ktm,
                    $resized_image_ktm->__toString()
                );
            ${'team_member_' . $x}->update([
                'identity_card_path' => 'bionix/' . $ktm,
            ]);
        }

        if ($this->with_member_4) {
            $team_member_4 = TeamSeniorMember::create([
                'name' => $this->member_4_name,
                'email' => $this->member_4_email,
                'whatsapp' => $this->member_4_whatsapp,
                'year' => $this->member_4_year,
                'major' => $this->member_4_major,
                'twibbon' => $this->member_4_twibbon,
                'university' => $this->member_4_university,
                'instagram' => $this->member_4_instagram
            ]);
            $ktm = date('YmdHis') . '_BIONIX COLLEGE_' . $this->team_name . '_4_KTM' . '.' . $this->member_4_ktm->getClientOriginalExtension();

            $resized_image_ktm = (new ImageManager())
                ->make($this->$this->member_4_ktm)
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode($this->$this->member_4_ktm->getClientOriginalExtension());

            Storage::disk('public')
                ->put(
                    'bionix/' . $ktm,
                    $resized_image_ktm->__toString()
                );
            $team_member_4->update([
                'identity_card_path' => 'bionix/' . $ktm,
            ]);
        }
        if ($this->with_member_5) {
            $team_member_5 = TeamSeniorMember::create([
                'name' => $this->member_5_name,
                'email' => $this->member_5_email,
                'whatsapp' => $this->member_5_whatsapp,
                'year' => $this->member_5_year,
                'major' => $this->member_5_major,
                'twibbon' => $this->member_5_twibbon,
                'university' => $this->member_5_university,
                'instagram' => $this->member_5_instagram,
            ]);

            $ktm = date('YmdHis') . '_BIONIX COLLEGE_' . $this->team_name . '_5_KTM' . '.' . $this->member_5_ktm->getClientOriginalExtension();

            $resized_image_ktm = (new ImageManager())
                ->make($this->$this->member_5_ktm)
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode($this->$this->member_5_ktm->getClientOriginalExtension());

            Storage::disk('public')
                ->put(
                    'bionix/' . $ktm,
                    $resized_image_ktm->__toString()
                );
            $team_member_5->update([
                'identity_card_path' => 'bionix/' . $ktm,
            ]);
        }


        Auth::user()->userable->update([
            'bionix_id' => $team_data->id,
            'bionix_type' => 'App\Models\Bionix\TeamSeniorData'
        ]);

        return redirect()->to(route('bionix.peserta.homepage'));
    }

    public function closeMessage()
    {
        $this->errorMessage = '';
        $this->resetErrorBag();
    }

    public function mount()
    {
        $this->cities = City::all();
        $this->member_1_email = Auth::user()->email;
        $this->member_1_name = Auth::user()->name;
        $this->info_source = 'IG';
    }

    public function render()
    {
        return view('livewire.pages.auth.bionix.register-college')->layout('layouts.auth-bionix');
    }
}
