<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $primaryKey = 'id';
    protected $fillable = ['name','text','show_time','timeout'];

    public function answers() {
        return $this->hasMany('App\Models\Answer', 'question_id');
    }
}
