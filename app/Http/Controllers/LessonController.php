<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function getAll() {
        return Lesson::all();
    }

    public function get($id) {
        return Lesson::where('id',$id)->get();
    }
}
