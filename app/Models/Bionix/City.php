<?php

namespace App\Models\Bionix;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function teamSenior(){
        return $this->hasMany(TeamSeniorData::class);
    }

    public function teamJunior(){
        return $this->hasMany(TeamSeniorData::class);
    }
}
