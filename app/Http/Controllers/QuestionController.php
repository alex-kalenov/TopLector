<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function getAll() {
        $questions = DB::table('questions')
            ->join('answers', 'questions.id', '=', 'answers.question_id')
            ->select('questions.*', 'answers.*')
            ->get();
        return $questions;
    }

    public function getLessonQuestions($lesson_id) {
        $questions = DB::table('questions')
            ->join('answers', 'questions.id', '=', 'answers.question_id')
            ->select('questions.*', 'answers.*')
            ->where('questions.lesson_id', '=', $lesson_id)
            ->get();
        return $questions;
    }

    public function create(Request $request) {
        $question = Question::create($request->all());
        return response()->json($question, 201);
    }

    public function addToLesson(Request $request) {
        Question::where('id',$request->input('id'))->
            update(['lesson_id' => $request->input('lesson_id')]);
        $question = Question::where('id',$request->input('id'))->get();
        return response()->json($question, 201);
    }
}
