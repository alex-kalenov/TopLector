<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\LessonQuestion;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function getAll() {
        $all_questions = Question::all();
        $questions = array();
        foreach ($all_questions as $question) {
            array_push($questions, $question->with('answers')->get());
        }
        return $questions;
    }

    public function getLessonQuestions($lesson_id) {
        $target_questions = LessonQuestion::where('lesson_id',$lesson_id)->get();
        $questions = array();
        foreach ($target_questions as $question) {
            array_push($questions,
                Question::where('id', $question->id)->with('answers')->get());
        }
        return $questions;
    }

    public function create(Request $request) {
        $question = Question::create($request->all());
        LessonQuestion::create(['question_id' => $question->id]);
        return response()->json($question, 201);
    }

    public function addToLesson(Request $request) {
        LessonQuestion::where('question_id',$request->input('question_id'))
            ->update(['lesson_id' => $request->input('lesson_id')]);
        $question = LessonQuestion::where('question_id',$request->input('question_id'))
            ->where('lesson_id',$request->input('lesson_id'))->get();
        return response()->json($question, 201);
    }
}
