<?php

namespace App\Models\Bionix;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamJuniorMember extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email','class', 'whatsapp', 'identity_card_path', 'team_id'];

    public function team(){
        return $this->belongsTo(TeamSeniorData::class, 'team_id');
    }
}
