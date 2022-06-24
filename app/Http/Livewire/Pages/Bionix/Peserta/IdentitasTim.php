<?php

namespace App\Http\Livewire\Pages\Bionix\Peserta;

use App\Models\Bionix\City;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

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
        $member_1_name,
        $member_2_name,
        $member_3_name,
        $member_1_email,
        $member_2_email,
        $member_3_email,
        $member_1_whatsapp,
        $member_2_whatsapp,
        $member_3_whatsapp,
        // $member_1_twibbon,
        // $member_2_twibbon,
        // $member_3_twibbon,
        $member_1_major,
        $member_2_major,
        $member_3_major,
        $member_1_year,
        $member_2_year,
        $member_3_year,
        $school_name,
        $school_city,
        $photo1,
        $photo2,
        $photo3;
    public $with_member_2, $with_member_3;
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

        $this->is_junior = Auth::user()->userable->bionix_type = "Admin\Models\Bionix\TeamJuniorData"?true:false;
        $this->with_member_2 = (($this->is_junior && Auth::user()->userable->bionix->member_id) || (!$this->is_junior && Auth::user()->userable->bionix->member1_id)) ? true : false;
        $this->with_member_3 = !$this->is_junior && Auth::user()->userable->bionix->member2_id ? true : false;
        $this->cities = City::orderBy('region')->get();
        $this->info_source = Auth::user()->userable->bionix->info_source;
        $this->team_name = Auth::user()->userable->bionix->team_name;
        $this->member_1_name = Auth::user()->name;
        $this->member_2_name = ($this->is_junior ? (Auth::user()->userable->bionix->member ? Auth::user()->userable->bionix->member->name : null) : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->name : null));
        $this->member_3_name = ($this->is_junior ? null : (Auth::user()->userable->bionix->member_2 ? Auth::user()->userable->bionix->member_2->name : null));
        $this->member_1_email = Auth::user()->email;
        $this->member_2_email = ($this->is_junior ? (Auth::user()->userable->bionix->member ? Auth::user()->userable->bionix->member->email : null) : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->email : null));
        $this->member_3_email = ($this->is_junior ? null : (Auth::user()->userable->bionix->member_2 ? Auth::user()->userable->bionix->member_2->email : null));
        //$this->member_1_whatsapp = Auth::user()->no_hp;
        $this->member_2_whatsapp = ($this->is_junior ? (Auth::user()->userable->bionix->member ? Auth::user()->userable->bionix->member->whatsapp : null) : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->whatsapp : null));
        $this->member_3_whatsapp = ($this->is_junior ? null : (Auth::user()->userable->bionix->member_2 ? Auth::user()->userable->bionix->member_2->whatsapp : null));
        $this->school_name = ($this->is_junior ? Auth::user()->userable->bionix->school_name : Auth::user()->userable->bionix->university_name);
        $this->school_city = Auth::user()->userable->bionix->city_id;
        $this->photo1 = Auth::user()->userable->bionix->leader->identity_card_path;
        $this->photo2 = ($this->is_junior ? (Auth::user()->userable->bionix->member ? Auth::user()->userable->bionix->member->identity_card_path : null) : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->identity_card_path : null));
        $this->photo3 = ($this->is_junior ? null : (Auth::user()->userable->bionix->member_2 ? Auth::user()->userable->bionix->member_2->identity_card_path : null));
        // $this->member_1_twibbon = ($this->is_junior ? null : Auth::user()->userable->bionix->leader->link_twibbon);
        // $this->member_2_twibbon = ($this->is_junior ? null : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->link_twibbon : null));
        // $this->member_3_twibbon = ($this->is_junior ? null : (Auth::user()->userable->bionix->member_2 ? Auth::user()->userable->bionix->member_2->link_twibbon : null));
        $this->member_1_major = ($this->is_junior ? null : Auth::user()->userable->bionix->leader->major);
        $this->member_2_major = ($this->is_junior ? null : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->major : null));
        $this->member_3_major = ($this->is_junior ? null : (Auth::user()->userable->bionix->member_2 ? Auth::user()->userable->bionix->member_2->major : null));
        $this->member_1_year = ($this->is_junior ? null : Auth::user()->userable->bionix->leader->year);
        $this->member_2_year = ($this->is_junior ? null : (Auth::user()->userable->bionix->member_1 ? Auth::user()->userable->bionix->member_1->year : null));
        $this->member_3_year = ($this->is_junior ? null : (Auth::user()->userable->bionix->member_2 ? Auth::user()->userable->bionix->member_2->year : null));

        $this->statusNotification();
    }

    public function statusNotification()
    {
        $this->jenisKartu = ($this->is_junior ? "kartu pelajar" : "kartu tanda mahasiswa / sejenisnya");

        $this->alert_color = Auth::user()->userable->bionix->profile_verif_status == 'Tahap Verifikasi' ? 'yellow'
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

    public function render()
    {
        return view('livewire.pages.bionix.peserta.identitas-tim');
    }
}
