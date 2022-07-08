<?php

namespace App\Models\Bionix;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsClassData extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function member(){
        $this->belongsTo(Member::class);
    }
}
