<?php

namespace App\Models\Bionix;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamJuniorData extends Model
{
    use HasFactory;

    protected $fillable = ['team_name', 'info_source', 'school_name', 'city_id', 'competition_round', 'profile_verif_status', 'profile_verfied_by', 'profile_verif_comment', 'payment_price', 'invoice_id', 'payment_proof_path', 'payment_verif_status', 'payment_verified_by', 'payment_verif_comment', 'leader_id', 'member_id'];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function memberData()
    {
        return $this->morphOne(Member::class, 'bionix');
    }

    public function profile_verified_by(){
        return $this->hasOne(Admin::class, 'profile_verified_by');
    }

    public function payment_verified_by(){
        return $this->hasOne(Admin::class, 'payment_verified_by');
    }

    public function promo(){
        return $this->morphMany(PromoTeam::class, 'teamable');
    }

    public function leader() {
        return $this->belongsTo(TeamJuniorMember::class, 'leader_id');
    }
    public function member()
    {
        return $this->hasOne(TeamJuniorMember::class, 'id', 'member_id');
    }

    public function invoice(){
        return $this->hasOne(BionixInvoice::class, 'team_id');
    }
}
