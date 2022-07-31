<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Peserta;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class IdentitasTim extends Component
{
    use WithFileUploads;

    public $name, $email, $whatsapp;
    public $photo1;
    public $alert_color, $alert_header, $alert_content, $readonly;
    public $is_edit = false;
    public $isStartup = false;
    public $message, $messageType;
    public
        $team_name,
        $institute_name,
        $startup_idea,
        $reason_joining_academy,
        $expectation_joining_academy,
        $post_academy_activity,
        $member_2_name,
        $member_3_name,
        $member_2_email,
        $member_3_email,
        $member_2_whatsapp,
        $member_3_whatsapp,
        $photo2,
        $photo3,
        $member_1_cv,
        $member_2_cv,
        $member_3_cv,
        $member_1_twibbon,
        $member_2_twibbon,
        $member_3_twibbon,
        $member_1_instagram,
        $member_2_instagram,
        $member_3_instagram,
        $member_1_twitter,
        $member_2_twitter,
        $member_3_twitter,
        $member_1_linkedin,
        $member_2_linkedin,
        $member_3_linkedin;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->photo1 = Auth::user()->userable->academy->leader->identity_card_path;
        $this->isStartup = (Auth::user()->userable->academy_type == 'App\Models\Icon\IconAcademyStartupData' ? true : false);
        $this->whatsapp = Auth::user()->no_hp;
        $this->team_name = Auth::user()->userable->academy->team_name;
        $this->institute_name = Auth::user()->userable->academy->university_name;
        $this->startup_idea = Auth::user()->userable->academy->startup_idea;
        $this->reason_joining_academy = Auth::user()->userable->academy->reason_joining_academy;
        $this->post_academy_activity = Auth::user()->userable->academy->post_academy_activity;
        $this->expectation_joining_academy = Auth::user()->userable->academy->expectation_joining_academy;
        $this->member_2_name = Auth::user()->userable->academy->member_1->name;
        $this->member_2_email = Auth::user()->userable->academy->member_1->email;
        $this->member_2_whatsapp = Auth::user()->userable->academy->member_1->whatsapp;
        $this->photo2 = Auth::user()->userable->academy->member_1->identity_card_path;
        $this->photo2 = Auth::user()->userable->academy->member_2->identity_card_path;
        $this->member_1_twibbon = Auth::user()->userable->academy->leader->link_twibbon;
        $this->member_2_twibbon = Auth::user()->userable->academy->member_1->link_twibbon;
        $this->member_3_name = Auth::user()->userable->academy->member_2->name;
        $this->member_3_email = Auth::user()->userable->academy->member_2->email;
        $this->member_3_whatsapp = Auth::user()->userable->academy->member_2->whatsapp;
        $this->member_3_twibbon = Auth::user()->userable->academy->member_2->link_twibbon;

        $this->alert();
    }

    public function saveData()
    {
        $validate = [
            'name' => 'required',
            'whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string'
        ];
        if (!is_string($this->photo1)) {
            $validate = array_merge($validate, [
                'photo1' => 'required|image|max:2048', // 2MB Max
            ]);
        }

        if ($this->isStartup) {
            $validate = array_merge($validate, [
                'startup_idea' => 'required',
                'reason_joining_academy' => 'required',
                'post_academy_activity' => 'required',
                'expectation_joining_academy' => 'required',
                'member_2_name' => 'required',
                'member_2_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
                'member_2_email' => ['required', 'email', Rule::unique('icon_academy_startup_members', 'email')->ignore(Auth::user()->userable->academy->member1_id)],
                'member_1_twibbon' => 'required|url',
                'member_2_twibbon' => 'required|url',
            ]);
            if (!is_string($this->photo2)) {
                $validate = array_merge($validate, [
                    'photo2' => 'required|image|max:2048', // 2MB Max
                ]);
            }
            if (Auth::user()->userable->academy->member2_id) {
                $validate = array_merge($validate, [
                    'member_3_name' => 'required',
                    'member_3_email' => ['required', 'email', Rule::unique('icon_academy_startup_members', 'email')->ignore(Auth::user()->userable->academy->member2_id)],
                    'member_3_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
                    'member_3_twibbon' => 'required|url',
                ]);
                if (!is_string($this->photo3)) {
                    $validate = array_merge($validate, [
                        'photo3' => 'required|image|max:2048', // 2MB Max
                    ]);
                }
            }

            if (
                sizeof(explode(" ", $this->startup_idea)) > 300 ||
                sizeof(explode(" ", $this->reason_joining_academy)) > 300 ||
                sizeof(explode(" ", $this->post_academy_activity)) > 300 ||
                sizeof(explode(" ", $this->expectation_joining_academy)) > 300
            ) {
                $this->message = 'Terdapat isian yang tidak sesuai batas maksimum';
                $this->messageType = 'red';
                return;
            }
        } else {
            $validate = array_merge($validate, [
                'hackerrank_link' => 'required|url',
                'twibbon_link' => 'required|url'
            ]);
            if ($this->curriculum_vitae && !is_string($this->curriculum_vitae)) {
                $validate = array_merge($validate, [
                    'curriculum_vitae' => 'required|mimes:pdf|max:3072'
                ]);
            }
        }

        $this->validate($validate);

        Storage::disk('public')->makeDirectory('kartu_identitas_icon');
        if (!is_string($this->photo1)) {
            $name = ($this->isStartup ? date('YmdHis') . '_STARTUP ACADEMY_' . $this->team_name . '_1' . '.' . $this->photo1->getClientOriginalExtension() : date('YmdHis') . '_DS ACADEMY_' . $this->name . '.' . $this->photo1->getClientOriginalExtension());
            $resized_image = (new ImageManager())
                ->make($this->photo1)
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode($this->photo1->getClientOriginalExtension());
            Storage::disk('public')
                ->put(
                    'kartu_identitas_icon/' . $name,
                    $resized_image->__toString()
                );
            ($this->isStartup ? Auth::user()->userable->academy->leader : Auth::user()->userable->academy)->update([
                'identity_card_path' => 'kartu_identitas_icon/' . $name,
                'link_twibbon' => ($this->isStartup ? $this->member_1_twibbon : $this->twibbon_link)
            ]);
        } else {
            ($this->isStartup ? Auth::user()->userable->academy->leader : Auth::user()->userable->academy)->update([
                'link_twibbon' => ($this->isStartup ? $this->member_1_twibbon : $this->twibbon_link)
            ]);
        }
        Auth::user()->update([
            'name' => $this->name,
            'no_hp' => $this->whatsapp
        ]);

        if ($this->isStartup) {
            if (!is_string($this->photo2)) {
                $name = date('YmdHis') . '_STARTUP ACADEMY_' . $this->team_name . '_2' . '.' . $this->photo2->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->photo2)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->photo2->getClientOriginalExtension());
                Storage::disk('public')
                    ->put(
                        'kartu_identitas_icon/' . $name,
                        $resized_image->__toString()
                    );

                Auth::user()->userable->academy->member_1->update([
                    'identity_card_path' => 'kartu_identitas_icon/' . $name
                ]);
            }
            Auth::user()->userable->academy->member_1->update([
                'name' => $this->member_2_name,
                'email' => $this->member_2_email,
                'whatsapp' => $this->member_2_whatsapp,
                'link_twibbon' => $this->member_2_twibbon
            ]);
            if (Auth::user()->userable->academy->member2_id) {
                if (!is_string($this->photo3)) {
                    $name = date('YmdHis') . '_STARTUP ACADEMY_' . $this->team_name . '_3' . '.' . $this->photo3->getClientOriginalExtension();
                    $resized_image = (new ImageManager())
                        ->make($this->photo3)
                        ->resize(600, null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })->encode($this->photo3->getClientOriginalExtension());
                    Storage::disk('public')
                        ->put(
                            'kartu_identitas_icon/' . $name,
                            $resized_image->__toString()
                        );
                    Auth::user()->userable->academy->member_2->update([
                        'identity_card_path' => 'kartu_identitas_icon/' . $name
                    ]);
                }
                Auth::user()->userable->academy->member_2->update([
                    'name' => $this->member_3_name,
                    'email' => $this->member_3_email,
                    'whatsapp' => $this->member_3_whatsapp,
                    'link_twibbon' => $this->member_3_twibbon
                ]);
            }
            Auth::user()->userable->academy->update([
                'team_name' => $this->team_name,
                'institute_name' => $this->institute_name,
                'startup_idea' => $this->startup_idea,
                'reason_joining_academy' => $this->reason_joining_academy,
                'expectation_joining_academy' => $this->expectation_joining_academy,
                'post_academy_activity' => $this->post_academy_activity
            ]);
        } else {
            if ($this->curriculum_vitae && !is_string($this->curriculum_vitae)) {
                $file_name = date('YmdHis') . '_CV_' . $this->name . '.' . $this->curriculum_vitae->getClientOriginalExtension();
                $this->curriculum_vitae->storeAs('cv_data_science', $file_name, 'public');
                Auth::user()->userable->academy->update([
                    'cv_path' => 'cv_data_science/' . $file_name
                ]);
                $this->curriculum_vitae = 'cv_data_science/' . $file_name;
            }
            Auth::user()->userable->academy->update([
                'hackerrank_profile_link' => $this->hackerrank_link
            ]);
        }
        $this->is_edit = false;
        $this->message = 'Data identitas berhasil diubah';
        $this->messageType = 'green';
    }


    public function applyVerification()
    {
        if ($this->is_edit) {
            $this->message = 'Pastikan bahwa perubahan data telah tersimpan';
            $this->messageType = 'red';
            return;
        }
        if ($this->isStartup) {
            if (
                !Auth::user()->userable->academy->team_name ||
                !Auth::user()->userable->academy->institute_name ||
                !Auth::user()->userable->academy->startup_idea ||
                !Auth::user()->userable->academy->reason_joining_academy ||
                !Auth::user()->userable->academy->post_academy_activity ||
                !Auth::user()->userable->academy->expectation_joining_academy ||
                !Auth::user()->userable->academy->leader->identity_card_path ||
                !Auth::user()->userable->academy->leader->link_twibbon ||
                !Auth::user()->userable->academy->member_1->identity_card_path ||
                !Auth::user()->userable->academy->member_1->name ||
                !Auth::user()->userable->academy->member_1->email ||
                !Auth::user()->userable->academy->member_1->whatsapp ||
                !Auth::user()->userable->academy->member_1->link_twibbon
            ) {
                $this->message = 'Pastikan bahwa semua data telah terisi';
                $this->messageType = 'red';
                return;
            }
            if (Auth::user()->userable->academy->member2_id) {
                if (
                    !Auth::user()->userable->academy->member_2->identity_card_path ||
                    !Auth::user()->userable->academy->member_2->name ||
                    !Auth::user()->userable->academy->member_2->email ||
                    !Auth::user()->userable->academy->member_2->whatsapp ||
                    !Auth::user()->userable->academy->member_2->link_twibbon
                ) {
                    $this->message = 'Pastikan bahwa semua data telah terisi';
                    $this->messageType = 'red';
                    return;
                }
            }
        } else {
            if (
                !Auth::user()->name || !Auth::user()->email || !Auth::user()->no_hp || !Auth::user()->userable->academy->identity_card_path || !Auth::user()->userable->academy->hackerrank_profile_link ||
                !Auth::user()->userable->academy->link_twibbon
            ) {
                $this->message = 'Pastikan bahwa semua data telah terisi';
                $this->messageType = 'red';
                return;
            }
        }

        Auth::user()->userable->academy->update([
            'profile_verif_status' => 'Tahap Verifikasi'
        ]);
        $this->alert();
    }


    public function closeMessage()
    {
        $this->resetErrorBag();
        $this->message = null;
        $this->messageType = null;
    }

    public function toEditMode()
    {
        $this->is_edit = true;
    }

    public function batalSubmit()
    {
        Auth::user()->userable->academy->update([
            'profile_verif_status' => 'Belum Unggah'
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
                $this->alert_content = 'Selamat Tim anda telah lolos dalam  tahap seleksi berkas, pantau terus media sosial kami untuk informasi selanjutnya';
                $this->readonly = false;
                break;
            case 'Rejected':
                $this->alert_color = 'red';
                $this->alert_header = 'Tim Anda tidak lolos tahap seleksi berkas';
                $this->alert_content = '';
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
        return view('livewire.pages.icon.academy.peserta.identitas-tim')->layout('layouts.dashboard');
    }
}
