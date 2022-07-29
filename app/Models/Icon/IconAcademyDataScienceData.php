<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconAcademyDataScienceData extends Model
{
    use HasFactory;

    protected $fillable = ['team_name', 'reason_joining', 'post_activity', 'expectation_joining_academy', 'university_name', 'competition_round', 'profile_verif_status', 'profile_verified_by', 'profile_verif_comment', 'payment_proof_path', 'payment_verif_status', 'payment_verified_by', 'payment_verif_comment', 'leader_id', 'member1_id', 'member2_id'];


    public function memberData()
    {
        return $this->morphOne(Member::class, 'academy');
    }

    public function profile_verified_by(){
        return $this->hasOne(Admin::class, 'profile_verified_by');
    }

    public function payment_verified_by(){
        return $this->hasOne(Admin::class, 'payment_verified_by');
    }

    public function leader() {
        return $this->belongsTo(IconAcademyDataScienceMember::class, 'leader_id');
    }
    public function member1()
    {
        return $this->hasOne(IconAcademyDataScienceMember::class, 'id', 'member1_id');
    }
    public function member2()
    {
        return $this->hasOne(IconAcademyDataScienceMember::class, 'id', 'member2_id');
    }
}
