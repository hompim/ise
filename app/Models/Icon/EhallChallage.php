<?php

namespace App\Models\Icon;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EhallChallage extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'ss_path',
        'is_accepted',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function scopeToday($builder)
    {
        return $builder->where('created_at', '>', today());
    }
}
