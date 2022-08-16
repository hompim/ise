<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EhallQuestQuiz extends Model
{
    use HasFactory;

    protected $fillable = ['question_type', 'type_id' ,'question', 'img_path', 'opt_a', 'opt_b', 'opt_c', 'opt_d', 'answer', 'explanation'];

    public function type()
    {
        return $this->belongsTo(EhallQuestType::class, 'type_id', 'id');
    }

    public function memberAnswers()
    {
        return $this->hasMany(EhallQuestMember::class, 'quiz_id', 'id');
    }
}
