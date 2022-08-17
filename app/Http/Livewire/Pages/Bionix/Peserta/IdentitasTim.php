<?php

namespace App\Http\Livewire\Pages\Bionix\Peserta;

use App\Models\Bionix\City;
use App\Models\Bionix\TeamJuniorMember;
use App\Models\Bionix\TeamSeniorMember;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\FacadesAuth;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;

class IdentitasTim extends Component
{

    use WithFileUploads;

    //Other Variable
    public $is_edit = false;
    public $is_junior;
    public $message, $messageType;
    public $cities;

    //Member Info Variable
    public
        $team_name,
        $info_source,
        $bmc,
        $judul,
        $senior_member,
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
        $member_1_twibbon,
        $member_2_twibbon,
        $member_3_twibbon,
        $member_4_twibbon,
        $member_5_twibbon,
        $member_1_major,
        $member_2_major,
        $member_3_major,
        $member_4_major,
        $member_5_major,
        $member_1_year,
        $member_2_year,
        $member_3_year,
        $member_4_year,
        $member_5_year,
        $member_1_university,
        $member_2_university,
        $member_3_university,
        $member_4_university,
        $member_5_university,
        $school_name,
        $school_city,
        $photo1,
        $photo2,
        $photo3,
        $photo4,
        $photo5;
    public $with_member_2;
    public $new_member_2 = false, $new_member_3 = false;

    //Status Notification Variable
    public $jenisKartu,
        $alreadyDeadline,
        $alert_color,
        $alert_content,
        $alert_header,
        $readonly;


    public function mount()
    {
        $this->is_junior = Auth::user()->userable->jenjang == "SMA" ? true : false;
        $this->senior_member = 0;
        $this->with_member_2 = (($this->is_junior && Auth::user()->userable->bionix->member_id) || (!$this->is_junior && Auth::user()->userable->bionix->member1_id)) ? true : false;
        $this->cities = City::orderBy('region')->get();
        $this->info_source = Auth::user()->userable->bionix->info_source;
        $this->team_name = Auth::user()->userable->bionix->team_name;
        $this->school_city = Auth::user()->userable->bionix->city_id;
        if ($this->is_junior) {
            $this->member_1_name = Auth::user()->name;
            $this->member_2_name = ($this->is_junior ? (Auth::user()->userable->bionix->member ? Auth::user()->userable->bionix->member->name : null) : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->name : null));
            $this->member_1_email = Auth::user()->email;
            $this->member_2_email = ($this->is_junior ? (Auth::user()->userable->bionix->member ? Auth::user()->userable->bionix->member->email : null) : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->email : null));
            $this->member_1_whatsapp = Auth::user()->whatsapp;
            $this->member_2_whatsapp = ($this->is_junior ? (Auth::user()->userable->bionix->member ? Auth::user()->userable->bionix->member->whatsapp : null) : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->whatsapp : null));
            $this->school_name = ($this->is_junior ? Auth::user()->userable->bionix->school_name : Auth::user()->userable->bionix->university_name);
            $this->photo1 = Auth::user()->userable->bionix->leader->identity_card_path;
            $this->photo2 = ($this->is_junior ? (Auth::user()->userable->bionix->member ? Auth::user()->userable->bionix->member->identity_card_path : null) : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->identity_card_path : null));
            $this->member_1_twibbon = ($this->is_junior ? Auth::user()->userable->bionix->leader->twibbon_path : Auth::user()->userable->bionix->leader->link_twibbon);
            $this->member_2_twibbon = ($this->is_junior ? (Auth::user()->userable->bionix->member ? Auth::user()->userable->bionix->member->twibbon_path : null) : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->link_twibbon : null));
            $this->member_1_instagram = ($this->is_junior ? Auth::user()->userable->bionix->leader->instagram_path : Auth::user()->userable->bionix->leader->link_twibbon);
            $this->member_2_instagram = ($this->is_junior ? (Auth::user()->userable->bionix->member ? Auth::user()->userable->bionix->member->instagram_path : null) : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->link_twibbon : null));
        } else {
            $this->bmc = Auth::user()->userable->bionix->bmc_file_path;
            $this->judul = Auth::user()->userable->bionix->judul_ide_bisnis;

            foreach (Auth::user()->userable->bionix->members as $i => $member) {
                $this->{'member_' . $i + 1 . '_name'} = $member->name;
                $this->{'member_' . $i + 1 . '_email'} = $member->email;
                $this->{'member_' . $i + 1 . '_twibbon'} = $member->twibbon;
                $this->{'member_' . $i + 1 . '_year'} = $member->year;
                $this->{'member_' . $i + 1 . '_major'} = $member->major;
                $this->{'member_' . $i + 1 . '_university'} = $member->university;
                $this->{'member_' . $i + 1 . '_whatsapp'} = $member->whatsapp;
                $this->{'photo'.$i+1} = $member->identity_card_path;
                $this->senior_member++;
            }
        }


        $this->statusNotification();
    }

    public function statusNotification()
    {
        $this->jenisKartu = ($this->is_junior ? "kartu pelajar" : "kartu tanda mahasiswa / sejenisnya");

        $this->alert_color = Auth::user()->userable->bionix->profile_verif_status == 'Tahap Verifikasi' ? 'blue'
            : (Auth::user()->userable->bionix->profile_verif_status == 'Terverifikasi' ? 'green'
                : (Auth::user()->userable->bionix->profile_verif_status == 'Ditolak' ? 'red'
                    : 'blue'));

        $this->alert_content = Auth::user()->userable->bionix->profile_verif_status == 'Tahap Verifikasi' ? 'Mohon tunggu beberapa saat hingga identitas anda diverifikasi oleh admin'
            : (Auth::user()->userable->bionix->profile_verif_status == 'Terverifikasi' ? ($this->is_junior ? 'Selanjutnya mohon lakukan pembayaran pada halaman <b>Pembayaran</b>' : 'Selanjutnya anda dapat mengikuti tahap penyisihan.')
                : (Auth::user()->userable->bionix->profile_verif_status == 'Ditolak' ? 'Identitas tim ditolak karena alasan berikut : ' . Auth::user()->userable->bionix->profile_verif_comment
                    : 'Lakukan pengajuan verifikasi identitas tim dengan melengkapi form di bawah. Pastikan bahwa semua data anggota sudah terisi dengan benar. <b>Selama tahap verifikasi, data diri tidak dapat diubah.</b>'));

        $this->alert_header =  Auth::user()->userable->bionix->profile_verif_status == 'Tahap Verifikasi' ? 'Identitas Tim Sedang Dalam Tahap Verifikasi'
            : (Auth::user()->userable->bionix->profile_verif_status == 'Terverifikasi' ? 'Identitas Tim Telah Terverifikasi'
                : (Auth::user()->userable->bionix->profile_verif_status == 'Ditolak' ? 'Identitas Tim Ditolak'
                    : 'Segera Lakukan Verifikasi Identitas Tim Anda'));
    }

    public function saveData()
    {
        $validate = [
            'team_name' => 'required',
            'member_1_name' => 'required',
            'member_1_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
            'school_name' => 'required',
            'school_city' => 'required',
            'info_source' => 'required'
        ];
        if (!is_string($this->photo1)) {
            $validate = array_merge($validate, [
                'photo1' => 'required|image|max:1024', // 1MB Max
            ]);
        }

        if ($this->with_member_2) {
            $validate = array_merge(
                $validate,
                [
                    'member_2_name' => 'required',
                    'member_2_email' => ['required', 'email', Rule::unique('team_senior_members', 'email')->ignore(($this->is_junior ? '' : Auth::user()->userable->bionix->member1_id)), Rule::unique('team_junior_members', 'email')->ignore(($this->is_junior ? Auth::user()->userable->bionix->member_id : ''))],
                    'member_2_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string'
                ]
            );
            if (!$this->is_junior) {
                $validate = array_merge($validate, [
                    'member_2_twibbon' => 'required|url',
                    'member_2_major' => 'required|string',
                    'member_2_year' => 'required|integer|min:2000|max:' . date('Y'),
                ]);
            }
            if ($this->photo2 && !is_string($this->photo2)) {
                $validate = array_merge($validate, [
                    'photo2' => 'required|image|max:1024', // 1MB Max
                ]);
            }
        } else {
            if (($this->member_2_email || $this->member_2_name || $this->member_2_whatsapp || ($this->photo2 && !is_string($this->photo2))) ||
                (!$this->is_junior && ($this->member_2_twibbon || $this->member_2_year || $this->member_2_major))
            ) {
                $this->new_member_2 = true;
                $validate = array_merge(
                    $validate,
                    [
                        'member_2_name' => 'required',
                        'member_2_email' => ['required', 'email', Rule::unique('team_senior_members', 'email')->ignore(($this->is_junior ? '' : Auth::user()->userable->bionix->member1_id)), Rule::unique('team_junior_members', 'email')->ignore(($this->is_junior ? Auth::user()->userable->bionix->member_id : ''))],
                        'member_2_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
                        'photo2' => 'required|image|max:1024',
                    ]
                );
                if (!$this->is_junior) {
                    $validate = array_merge($validate, [
                        'member_2_twibbon' => 'required|url',
                        'member_2_major' => 'required|string',
                        'member_2_year' => 'required|integer|min:2000|max:' . date('Y'),
                    ]);
                }
            }
        }

        if (!$this->is_junior) {
            $validate = array_merge($validate, [
                'member_1_twibbon' => 'required|url',
                'member_1_major' => 'required|string',
                'member_1_year' => 'required|integer|min:2000|max:' . date('Y'),
            ]);
            if ($this->with_member_3) {
                $validate = array_merge($validate, [
                    'member_3_twibbon' => 'required|url',
                    'member_3_major' => 'required|string',
                    'member_3_year' => 'required|integer|min:2000|max:' . date('Y'),
                    'member_3_name' => 'required',
                    'member_3_email' => ['required', 'email', Rule::unique('team_senior_members', 'email')->ignore(Auth::user()->userable->bionix->member2_id), Rule::unique('team_junior_members', 'email')],
                    'member_3_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
                ]);
                if ($this->photo3 && !is_string($this->photo3)) {
                    $validate = array_merge($validate, [
                        'photo3' => 'required|image|max:1024', // 1MB Max
                    ]);
                }
            } elseif (($this->member_3_email || $this->member_3_name || $this->member_3_whatsapp || $this->member_3_major || $this->member_3_year || ($this->photo3 && !is_string($this->photo3))) ||
                (!$this->is_junior && $this->member_3_twibbon)
            ) {
                $this->new_member_3 = true;
                $validate = array_merge($validate, [
                    'member_3_twibbon' => 'required|url',
                    'member_3_major' => 'required|string',
                    'member_3_year' => 'required|integer|min:2000|max:' . date('Y'),
                    'member_3_name' => 'required',
                    'member_3_email' => ['required', 'email', Rule::unique('team_senior_members', 'email')->ignore(Auth::user()->userable->bionix->member2_id), Rule::unique('team_junior_members', 'email')],
                    'member_3_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
                    'photo3' => 'required|image|max:1024', // 1MB Max
                ]);
            }
        }

        $this->validate($validate);

        Storage::disk('public')->makeDirectory('bionix');

        //Update DB
        if ($this->is_junior) {
            Auth::user()->userable->bionix->update([
                'team_name' => $this->team_name,
                'school_name' => $this->school_name,
                'city_id' => $this->school_city,
                'info_source' => $this->info_source
            ]);
            if ($this->with_member_2) {
                Auth::user()->userable->bionix->member->update([
                    'name' => $this->member_2_name,
                    'email' => $this->member_2_email,
                    'whatsapp' => $this->member_2_whatsapp
                ]);
            } elseif ($this->new_member_2) {
                $member_2 = TeamJuniorMember::create([
                    'name' => $this->member_2_name,
                    'email' => $this->member_2_email,
                    'whatsapp' => $this->member_2_whatsapp
                ]);
                Auth::user()->userable->bionix->update([
                    'member_id' => $member_2->id
                ]);
            }
            if (!is_string($this->photo1)) {
                $name1 = date('YmdHis') . '_BIONIX Student_' . $this->team_name . '_1_KTM' . '.' . $this->photo1->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->photo1)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->photo1->getClientOriginalExtension());
                Storage::disk('public')
                    ->put(
                        'bionix/' . $name1,
                        $resized_image->__toString()
                    );
                Auth::user()->userable->bionix->leader->update([
                    'identity_card_path' => 'bionix/' . $name1
                ]);
            }
            if (!is_string($this->member_1_instagram)) {
                $insta1 = date('YmdHis') . '_BIONIX Student_' . $this->team_name . '_1_INSTAGRAM' . '.' . $this->member_1_instagram->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->member_1_instagram)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->member_1_instagram->getClientOriginalExtension());
                Storage::disk('public')
                    ->put(
                        'bionix/' . $insta1,
                        $resized_image->__toString()
                    );
                Auth::user()->userable->bionix->leader->update([
                    'instagram_path' => 'bionix/' . $insta1
                ]);
            }
            if (!is_string($this->member_1_twibbon)) {
                $twibbon1 = date('YmdHis') . '_BIONIX Student_' . $this->team_name . '_1_TWIBBON' . '.' . $this->member_1_twibbon->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->member_1_twibbon)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->member_1_twibbon->getClientOriginalExtension());
                Storage::disk('public')
                    ->put(
                        'bionix/' . $twibbon1,
                        $resized_image->__toString()
                    );
                Auth::user()->userable->bionix->leader->update([
                    'twibbon_path' => 'bionix/' . $twibbon1
                ]);
            }

            if ($this->photo2 && !is_string($this->photo2)) {
                $name2 = date('YmdHis') . '_BIONIX Student_' . $this->team_name . '_2_KTM' . '.' . $this->photo2->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->photo2)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->photo2->getClientOriginalExtension());
                Storage::disk('public')
                    ->put(
                        'bionix/' . $name2,
                        $resized_image->__toString()
                    );

                Auth::user()->userable->bionix->member->update([
                    'identity_card_path' => 'bionix/' . $name2
                ]);
            }
            if ($this->member_2_instagram && !is_string($this->member_2_instagram)) {
                $insta2 = date('YmdHis') . '_BIONIX Student_' . $this->team_name . '_2_INSTAGRAM' . '.' . $this->member_2_instagram->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->member_2_instagram)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->member_2_instagram->getClientOriginalExtension());
                Storage::disk('public')
                    ->put(
                        'bionix/' . $insta2,
                        $resized_image->__toString()
                    );

                Auth::user()->userable->bionix->member->update([
                    'instagram_path' => 'bionix/' . $insta2
                ]);
            }
            if ($this->member_2_twibbon && !is_string($this->member_2_twibbon)) {
                $twibbon2 = date('YmdHis') . '_BIONIX Student_' . $this->team_name . '_2_TWIBBON' . '.' . $this->member_2_twibbon->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->member_2_twibbon)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->member_2_twibbon->getClientOriginalExtension());
                Storage::disk('public')
                    ->put(
                        'bionix/' . $twibbon2,
                        $resized_image->__toString()
                    );

                Auth::user()->userable->bionix->member->update([
                    'twibbon_path' => 'bionix/' . $twibbon2
                ]);
            }
        } elseif (!$this->is_junior) {
            Auth::user()->userable->bionix->update([
                'team_name' => $this->team_name,
                'city_id' => $this->school_city,
                'info_source' => $this->info_source,
                'judul_ide_bisnis' => $this->judul
            ]);

            foreach (Auth::user()->userable->bionix->members as $i => $member) {
                $member->update([
                    'twibbon' => $this->{'member_' . $i + 1 . '_twibbon'},
                    'university' => $this->{'member_' . $i + 1 . '_university'},
                    'year' => $this->{'member_' . $i + 1 . '_year'},
                    'major' => $this->{'member_' . $i + 1 . '_major'},
                    'name' => $this->{'member_' . $i + 1 . '_name'},
                    'email' => $this->{'member_' . $i + 1 . '_email'},
                    'whatsapp' => $this->{'member_' . $i + 1 . '_whatsapp'}
                ]);

                if ($this->{'photo'.$i+1} && !is_string($this->{'photo' . $i + 1})) {
                    $name = date('YmdHis') . '_BIONIX College_' . $this->team_name . '_' . $i + 1 . '.' . $this->{'photo' . $i + 1}->getClientOriginalExtension();
                    $resized_image = (new ImageManager())
                        ->make($this->{'photo' . $i + 1})
                        ->resize(600, null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })->encode($this->{'photo' . $i + 1}->getClientOriginalExtension());
                    Storage::disk('public')
                        ->put(
                            'bionix/' . $name,
                            $resized_image->__toString()
                        );
                    $member->update([
                        'identity_card_path' => 'bionix/' . $name
                    ]);
                }
            }
        }


        Auth::User()->update([
            'name' => $this->member_1_name,
            'whatsapp' => $this->member_1_whatsapp,
        ]);

        if ($this->is_junior) {
            Auth::user()->userable->bionix->leader->update([
                'name' => $this->member_1_name,
                'email' => $this->member_1_email,
                'whatsapp' => $this->member_1_whatsapp
            ]);
        }

        $this->is_edit = false;
        $this->message = 'Data diri berhasil diubah';
        $this->messageType = 'green';
    }

    public function batalSubmit()
    {
        Auth::user()->userable->bionix->update([
            'profile_verif_status' => 'Belum Unggah'
        ]);
    }

    public function deleteMember($member_no)
    {
        if ($member_no == 2) {
            $this->member_2_whatsapp = null;
            $this->member_2_email = null;
            $this->member_2_twibbon = null;
            $this->member_2_name = null;
            $this->member_2_year = null;
            $this->member_2_major = null;
            $this->photo2 = null;
            $this->with_member_2 = false;
            $this->new_member_2 = false;

            if ($this->is_junior && Auth::user()->userable->bionix->member_id) {
                Auth::user()->userable->bionix->member->delete();
            } elseif (!$this->is_junior && Auth::user()->userable->bionix->member1_id) {
                Auth::user()->userable->bionix->member_1->delete();
            }
        } elseif ($member_no == 3) {
            $this->member_3_whatsapp = null;
            $this->member_3_email = null;
            $this->member_3_twibbon = null;
            $this->member_3_name = null;
            $this->member_3_year = null;
            $this->member_3_major = null;
            $this->photo3 = null;
            $this->with_member_3 = false;
            $this->new_member_3 = false;

            if (!$this->is_junior && Auth::user()->userable->bionix->member2_id) {
                Auth::user()->userable->bionix->member_2->delete();
            }
        }
        $this->message = 'Anggota ' . $member_no . ' berhasil dihapus';
        $this->messageType = 'green';
    }

    public function applyVerification()
    {
        if ($this->is_edit) {
            $this->message = 'Pastikan bahwa perubahan data diri telah tersimpan';
            $this->messageType = 'red';
            return;
        }
        if ($this->is_junior) {
            if (
                !Auth::user()->userable->bionix->team_name ||
                !Auth::user()->userable->bionix->school_name ||
                !Auth::user()->userable->bionix->leader->identity_card_path ||
                (Auth::user()->userable->bionix->member_id &&
                    (!Auth::user()->userable->bionix->member->name ||
                        !Auth::user()->userable->bionix->member->email ||
                        !Auth::user()->userable->bionix->member->identity_card_path ||
                        !Auth::user()->userable->bionix->member->whatsapp))
            ) {
                $this->message = 'Pastikan bahwa semua data telah terisi';
                $this->messageType = 'red';
                return;
            }
        } else {
            if (
                !Auth::user()->userable->bionix->team_name ||
                !Auth::user()->userable->bionix->university_name ||
                !Auth::user()->userable->bionix->leader->identity_card_path ||
                !Auth::user()->userable->bionix->leader->link_twibbon ||
                !Auth::user()->userable->bionix->leader->year ||
                !Auth::user()->userable->bionix->leader->major ||
                (Auth::user()->userable->bionix->member1_id && (!Auth::user()->userable->bionix->member_1->identity_card_path ||
                    !Auth::user()->userable->bionix->member_1->name ||
                    !Auth::user()->userable->bionix->member_1->email ||
                    !Auth::user()->userable->bionix->member_1->whatsapp ||
                    !Auth::user()->userable->bionix->member_1->year ||
                    !Auth::user()->userable->bionix->member_1->major ||
                    !Auth::user()->userable->bionix->member_1->link_twibbon)) ||
                (Auth::user()->userable->bionix->member2_id && (!Auth::user()->userable->bionix->member_2->link_twibbon ||
                    !Auth::user()->userable->bionix->member_2->identity_card_path ||
                    !Auth::user()->userable->bionix->member_2->name ||
                    !Auth::user()->userable->bionix->member_2->email ||
                    !Auth::user()->userable->bionix->member_2->year ||
                    !Auth::user()->userable->bionix->member_2->major ||
                    !Auth::user()->userable->bionix->member_2->whatsapp))
            ) {
                $this->message = 'Pastikan bahwa semua data telah terisi';
                $this->messageType = 'red';
                return;
            }
        }
        Auth::user()->userable->bionix->update([
            'profile_verif_status' => 'Tahap Verifikasi'
        ]);
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

    public function render()
    {
        return view('livewire.pages.bionix.peserta.identitas-tim')->layout('layouts.dashboard');
    }
}
