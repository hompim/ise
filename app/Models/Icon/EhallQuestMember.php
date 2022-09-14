<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EhallQuestMember extends Model
{
    use HasFactory;

    protected $fillable=['member_id','quiz_id','is_right','answer'];

    public function quiz(){
        return $this->belongsTo(EhallQuestQuiz::class,'quiz_id');
    }

    public function member(){
        return $this->belongsTo(Member::class, 'member_id');
    }
}
