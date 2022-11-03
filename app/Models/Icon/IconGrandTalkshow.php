<?php

namespace App\Models\Icon;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconGrandTalkshow extends Model
{
    use HasFactory;

    protected $fillable = ['member_id', 'instagram_story_path', 'info_source', 'presensi_status', 'school_name'];

    public function member(){
        return $this->belongsTo(Member::class);
    }
}
