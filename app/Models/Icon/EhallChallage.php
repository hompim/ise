<?php

namespace App\Models\Icon;

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
}
