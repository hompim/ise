<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Verifikasi\Components;

use App\Models\Icon\IconAcademyDataScienceData;
use App\Models\Icon\IconAcademyStartupData;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDetail extends ModalComponent
{
    public $icon_data;
    public $type;
    public $photo1;
    public $photo2;
    public $photo3;
    public $member1_name,
        $member2_name,
        $member3_name,
        $member1_email,
        $member2_email,
        $member3_email,
        $member1_whatsapp,
        $member2_whatsapp,
        $member3_whatsapp,
        $member1_twibbon,
        $member2_twibbon,
        $member3_twibbon,
        $institute_name,
        $team_name,
        $commitment_proof,
        $startup_title,
        $startup_idea,
        $reason_joining_academy,
        $expectation_joining_academy,
        $post_academy_activity,
        $cv1,
        $cv2,
        $cv3;


    public function render()
    {
        return view('livewire.pages.icon.academy.admin.verifikasi.components.modal-detail');
    }


    public function mount($id, $type)
    {
        $this->type = $type;
        $this->icon_data = $type == "Startup" ? IconAcademyStartupData::find($id) : IconAcademyDataScienceData::find($id);
        $this->team_name = $this->icon_data->team_name;
        $this->member1_name = $this->icon_data->leader->name;
        $this->member2_name = $this->icon_data->member_1->name;
        $this->member1_whatsapp = $this->icon_data->leader->whatsapp;
        $this->member2_whatsapp = $this->icon_data->member_1->whatsapp;
        $this->member1_email = $this->icon_data->leader->email;
        $this->member2_email = $this->icon_data->member_1->email;
        $this->photo1 = $this->icon_data->leader->identity_card_path;
        $this->photo2 = $this->icon_data->member_1->identity_card_path;
        $this->member1_twibbon = $this->icon_data->leader->link_twibbon;
        $this->member2_twibbon = $this->icon_data->member_1->link_twibbon;
        $this->member3_name = ($this->icon_data->member_2 ? $this->icon_data->member_2->name : null);
        $this->member3_whatsapp = ($this->icon_data->member_2 ? $this->icon_data->member_2->whatsapp : null);
        $this->member3_email = ($this->icon_data->member_2 ? $this->icon_data->member_2->email : null);
        $this->member3_twibbon = ($this->icon_data->member_2 ? $this->icon_data->member_2->link_twibbon : null);
        $this->photo3 = ($this->icon_data->member_2 ? $this->icon_data->member_2->identity_card_path : null);
        $this->institute_name = $this->icon_data->university_name;

        if ($type != 'Startup') {
            $this->cv1 = $this->icon_data->leader->cv_path;
            $this->cv2 = $this->icon_data->member_1->cv_path;
            $this->cv3 = $this->icon_data->member_2->cv_path;
            $this->expectation_joining_academy = $this->icon_data->expectation_joining_academy;
            $this->reason_joining_academy = $this->icon_data->reason_joining;
            $this->post_academy_activity = $this->icon_data->post_activity;
        } else {
            $this->startup_title = $this->icon_data->startup_idea_title;
            $this->startup_idea = $this->icon_data->startup_idea_desc;
        }
    }

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }
}
