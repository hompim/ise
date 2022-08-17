<?php

namespace App\Models\Bionix;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamSeniorMember extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email','year', 'major', 'whatsapp','university' ,'identity_card_path', 'team_id','is_leader'];

    public function team(){
        return $this->belongsTo(TeamSeniorData::class, 'team_id');
    }
}
