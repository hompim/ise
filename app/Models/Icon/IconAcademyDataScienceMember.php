<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconAcademyDataScienceMember extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'whatsapp', 'identity_card_path','link_twibbon', 'link_instagram', 'cv_path'];
}
