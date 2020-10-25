<?php

namespace App\Http\Controllers;

use App\Models\LessonQuestion;
use Illuminate\Http\Request;

class StudentAnswerController extends Controller
{
    public function create(Request $request) {
        $question = LessonQuestion::create($request->all());
        return response()->json($question, 201);
    }
}
