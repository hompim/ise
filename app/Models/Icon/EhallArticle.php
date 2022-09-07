<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EhallArticle extends Model
{
    use HasFactory;

    public $guarded = [];

    public function galery(){
        return $this->hasMany(EhallArticleImage::class, 'article_id');
    }
}
