<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAnswer extends Model
{
    use HasFactory;
    protected $table = 'student_answers';
    protected $primaryKey = 'id';
    protected $fillable = ['question_id','answer_id'];
}
