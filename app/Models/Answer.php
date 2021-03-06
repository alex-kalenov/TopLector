<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $table = 'answers';
    protected $primaryKey = 'id';
    protected $fillable = ['question_id','text','is_true'];

    public function question() {
        return $this->belongsTo('App\Models\Question', 'id');
    }
}
