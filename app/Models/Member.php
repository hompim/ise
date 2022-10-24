<?php

namespace App\Models;

use App\Models\Bionix\BionixInvoice;
use App\Models\Bionix\BionixSchool;
use App\Models\Bionix\IsClassData;
use App\Models\Icon\EhallQuestMember;
use App\Models\Icon\IconWebinarKickOff;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['jenjang', 'academy_id', 'academy_type', 'bionix_id','bionix_type', 'roadshow_school_id'];

    public function roadshow_school(){
        return $this->belongsTo(BionixSchool::class, 'roadshow_school_id');
    }

    public function quizAnswers(){
        return $this->hasMany(EhallQuestMember::class, 'member_id');
    }

    public function user(){
        return $this->morphOne(User::class, 'userable');
    }

    public function bionix(){
        return $this->morphTo();
    }

    public function academy(){
        return $this->morphTo();
    }

    public function webinar(){
        return $this->hasOne(IconWebinarKickOff::class);
    }

    public function talkshow(){
        return $this->hasOne(IconGrandTalkshow::class);
    }


    public function isclass(){
        return $this->hasOne(IsClassData::class);
    }

    public function dp(){
        return $this->hasMany(BionixInvoice::class);
    }
}
