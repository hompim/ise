<?php

namespace App\Http\Livewire\Pages\Auth\Bionix;

use App\Models\Bionix\City;
use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamJuniorMember;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterStudent extends Component
{
    use WithFileUploads;

    public $cities;
    public $step = 1;
    public $isIdentityDone = false;
    public $isAnggotaDone = false;
    public $isAkunDone = false;
    public $errorMessage;
    public $team_name, $info_source, $member_1_name, $member_2_name, $member_1_email, $member_2_email, $member_1_whatsapp, $member_2_whatsapp, $member_1_class, $member_2_class, $school_name, $school_city, $password, $re_password, $region = '1', $agree;
    public $twibbon_1,$twibbon_2;
    public $ktm_1, $ktm_2;
    public $instagram_1, $instagram_2;
    public $with_member;


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
        } elseif ($toStep == 3) {
            if ($this->isAnggotaDone) {
                $this->step = $toStep;
                $this->errorMessage = '';
            } else {
                $this->errorMessage = "Harap selesaikan tahap 3 terlebih dahulu";
            }
        }
    }

    public function identityTeamSubmit()
    {
        $this->validate([
            'team_name' => 'required',
            'school_name' => 'required',
            'school_city' => 'required',
        ]);
        $this->isIdentityDone = true;
        $this->move(2);
    }
    public function anggotaTeamSubmit()
    {
        $this->validate([
            'member_1_name' => 'required',
            'member_1_email' => 'required|email',
            'member_1_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'member_1_class' => 'required',
            'twibbon_1' => 'required', // 1MB Max
            'ktm_1' => 'required|image|max:2048', // 1MB Max
            'instagram_1' => 'required|image|max:2048', // 1MB Max
        ]);

        if ($this->member_1_email == $this->member_2_email) {
            $this->errorMessage = "Email kedua peserta tidak boleh sama";
            return;
        }
        $this->isAnggotaDone = true;
        $this->move(3);
    }
    public function akunSubmit()
    {
        $this->with_member = false;
        $arr_validation = [
            'team_name' => 'required',
            'school_name' => 'required',
            'school_city' => 'required',
            'member_1_name' => 'required',
            'member_1_email' => 'required|email|unique:team_senior_members,email|unique:team_junior_members,email',
            'member_1_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
            'member_1_class' => 'required',
            'twibbon_1' => 'required', // 1MB Max
            'ktm_1' => 'required|image|max:2048', // 1MB Max

        ];
        if ($this->member_2_email || $this->member_2_name || $this->member_2_whatsapp || $this->member_2_class || $this->twibbon_2 || $this->ktm_2 || $this-> instagram_2) {
            $arr_validation = array_merge($arr_validation, [
                'member_2_name' => 'required',
                'member_2_email' => 'required|email|unique:team_senior_members,email|unique:team_junior_members,email',
                'member_2_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
                'member_2_class' => 'required',
                'twibbon_2' => 'required', // 1MB Max
                'ktm_2' => 'required|image|max:2048', // 1MB Max


            ]);
            $this->with_member = true;
        }
        $this->validate($arr_validation);
        if ($this->with_member && $this->member_1_email == $this->member_2_email) {
            $this->errorMessage = "Email kedua peserta tidak boleh sama";
            return;
        }

        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }

        $this->isAkunDone = true;

        Storage::disk('public')->makeDirectory('bionix');

        Auth::user()->update([
            'name' => $this->member_1_name,
            'whatsapp' => $this->member_1_whatsapp
        ]);
        //masukin ke database di sini bikin create
        $team_member_1 = TeamJuniorMember::create([
            'name' => $this->member_1_name,
            'email' => $this->member_1_email,
            'class' => $this->member_1_class,
            'whatsapp' => $this->member_1_whatsapp,
            'twibbon_path' => $this->twibbon_1
        ]);

        if (!is_string($this->ktm_1) && !is_string($this->twibbon_1) && !is_string($this->instagram_1)) {
            $ktm = date('YmdHis') . '_BIONIX Student_' . $this->team_name . '_1_KTM' . '.' . $this->ktm_1->getClientOriginalExtension();
            // $instagram = date('YmdHis') . '_BIONIX Student_' . $this->team_name . '_1_INSTAGRAM' . '.' . $this->instagram_1->getClientOriginalExtension();

            $resized_image_ktm = (new ImageManager())
                ->make($this->ktm_1)
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode($this->ktm_1->getClientOriginalExtension());

            // $resized_image_instagram = (new ImageManager())
            //     ->make($this->instagram_1)
            //     ->resize(600, null, function ($constraint) {
            //         $constraint->aspectRatio();
            //         $constraint->upsize();
            //     })->encode($this->instagram_1->getClientOriginalExtension());


            Storage::disk('public')
                ->put('bionix/' . $ktm,
                    $resized_image_ktm->__toString());
            // Storage::disk('public')
            //     ->put('bionix/' . $instagram,
            //         $resized_image_instagram->__toString());


            $team_member_1->update([
                'identity_card_path' => 'bionix/' . $ktm,
            ]);
        }

        $team_member_2 = null;
        if ($this->with_member) {
            $team_member_2 = TeamJuniorMember::create([
                'name' => $this->member_2_name,
                'email' => $this->member_2_email,
                'class' => $this->member_2_class,
                'whatsapp' => $this->member_2_whatsapp,
                'twibbon_path' => $this->twibbon_2,
            ]);

            if (!is_string($this->ktm_2) && !is_string($this->twibbon_2) && !is_string($this->instagram_2)) {
                $ktm2 = date('YmdHis') . '_BIONIX Student_' . $this->team_name . '_2_KTM' . '.' . $this->ktm_1->getClientOriginalExtension();
                // $instagram2 = date('YmdHis') . '_BIONIX Student_' . $this->team_name . '_2_INSTAGRAM' . '.' . $this->instagram_1->getClientOriginalExtension();

                $resized_image_ktm2 = (new ImageManager())
                    ->make($this->ktm_2)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->ktm_2->getClientOriginalExtension());

                // $resized_image_instagram2 = (new ImageManager())
                //     ->make($this->instagram_2)
                //     ->resize(600, null, function ($constraint) {
                //         $constraint->aspectRatio();
                //         $constraint->upsize();
                //     })->encode($this->instagram_2->getClientOriginalExtension());


                Storage::disk('public')
                    ->put('bionix/' . $ktm2,
                        $resized_image_ktm2->__toString());
                // Storage::disk('public')
                //     ->put('bionix/' . $instagram2,
                //         $resized_image_instagram2->__toString());

                    $team_member_2->update([
                    'identity_card_path' => 'bionix/' . $ktm2,
                ]);
            }
        }
        $team_data = TeamJuniorData::create([
            'team_name' => $this->team_name,
            'info_source' => $this->info_source,
            'school_name' => $this->school_name,
            'city_id' => $this->school_city,
            'competition_round' => 'Penyisihan 1',
            'leader_id' => $team_member_1->id,
        ]);

        if($this->with_member){
            $team_data->update([
                'member_id' => $team_member_2->id
            ]);
        }

        Auth::user()->userable->update([
            'bionix_id' => $team_data->id,
            'bionix_type' => 'App\Models\Bionix\TeamJuniorData'
        ]);

        return redirect()->to(route('register-student-success'));
    }


    public function updatedSchoolCity(){
        $this->region = City::find($this->school_city)->region;
    }

    public function closeModal()
    {
        $this->errorMessage = '';
        $this->resetErrorBag();
    }

    public function mount(){
        $this->member_1_name = Auth::user()->name;
        $this->member_1_email = Auth::user()->email;

        if(Auth::user()->userable->roadshow_school){
            $this->school_name = Auth::user()->userable->roadshow_school->school_name;
        }

        $this->cities = City::all();
        $this->info_source = "IG";
    }

    public function render()
    {
        return view('livewire.pages.auth.bionix.register-student')->layout('layouts.auth-bionix');
    }
}
