<?php

namespace App\Models\Icon;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class IconWebinarKickOff extends Model
{
    use HasFactory;

    protected $fillable = ['member_id', 'instagram_story_path', 'info_source', 'presensi_status', 'school_name'];

    public function member(){
        return $this->belongsTo(Member::class);
    }

    public function presensiStatus(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? 'Sudah Presensi' : 'Belum Presensi'
        );
    }
}
