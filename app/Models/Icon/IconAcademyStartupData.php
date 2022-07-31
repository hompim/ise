<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconAcademyStartupData extends Model
{
    use HasFactory;

    protected $guarded = [];


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
        return $this->belongsTo(IconAcademyStartupMember::class, 'leader_id');
    }
    public function member_1()
    {
        return $this->belongsTo(IconAcademyStartupMember::class, 'member1_id');
    }
    public function member_2()
    {
        return $this->belongsTo(IconAcademyStartupMember::class,'member2_id');
    }
}
