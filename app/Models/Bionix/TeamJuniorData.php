<?php

namespace App\Models\Bionix;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamJuniorData extends Model
{
    use HasFactory;

    protected $fillable = ['team_name', 'info_source', 'school_name', 'city_id', 'competition_round', 'profile_verif_status', 'profile_verfied_by', 'profile_verif_comment', 'payment_price', 'invoice_id', 'payment_proof_path', 'payment_verif_status', 'payment_verified_by', 'payment_verif_comment'];

    public function member(){
        return $this->hasMany(TeamJuniorMember::class, 'team_id');
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function profile_verified_by(){
        return $this->hasOne(Admin::class, 'profile_verified_by');
    }

    public function payment_verified_by(){
        return $this->hasOne(Admin::class, 'payment_verified_by');
    }

    public function promo(){
        return $this->morphOne(PromoTeam::class, 'teamable');
    }
}
