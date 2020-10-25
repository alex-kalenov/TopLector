<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonQuestion extends Model
{
    use HasFactory;
    protected $table = 'lesson_questions';
    protected $primaryKey = 'id';
    protected $fillable = ['lesson_id','question_id'];

    public function questions() {
        return $this->belongsTo('App\Models\Question', 'question_id');
    }
}
