<?php

namespace App\Models\Icon;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconWebinarKickOff extends Model
{
    use HasFactory;

    protected $fillable = ['member_id', 'instagram_story_path', 'info_source', 'whatsapp'];

    public function member(){
        return $this->belongsTo(Member::class);
    }
}
