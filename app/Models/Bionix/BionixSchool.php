<?php

namespace App\Models\Bionix;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BionixSchool extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function member(){
        return $this->hasMany(Member::class,'roadshow_school_id');
    }
}
