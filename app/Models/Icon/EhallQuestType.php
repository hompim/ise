<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EhallQuestType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function quizzes(){
        return $this->hasMany(EhallQuestQuiz::class,'type_id','id');
    }
}
