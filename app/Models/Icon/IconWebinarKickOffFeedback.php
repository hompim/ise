<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconWebinarKickOffFeedback extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function webinar(){
        return $this->belongsTo(IconWebinarKickOff::class, 'webinar_id');
    }
}
