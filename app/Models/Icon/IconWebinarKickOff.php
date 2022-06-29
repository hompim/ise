<?php

namespace App\Models\Icon;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconWebinarKickOff extends Model
{
    use HasFactory;

    protected $fillable = ['member_id', 'insitute_name', 'link_story', 'info_source'];

    public function member(){
        return $this->belongsTo(Member::class);
    }
}
