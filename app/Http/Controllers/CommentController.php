<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getAll() {
        return Comment::all();
    }

    public function getLessonComments($lesson_id) {
        return Comment::where('lesson_id',$lesson_id)->get();
    }

    public function create(Request $request) {
        $comment = Comment::create($request->all());
        return response()->json($comment, 201);
    }
}
