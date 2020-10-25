<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('lesson', 'App\Http\Controllers\LessonController@getAll');
Route::get('lesson/{id}', 'App\Http\Controllers\LessonController@get');

Route::get('comment','App\Http\Controllers\CommentController@getAll');
Route::get('comment/{id}','App\Http\Controllers\CommentController@getLessonComments');
Route::post('comment','App\Http\Controllers\CommentController@create');

Route::get('question','App\Http\Controllers\QuestionController@getAll');
Route::get('question/{id}','App\Http\Controllers\QuestionController@getLessonQuestions');
Route::post('question','App\Http\Controllers\QuestionController@create');
Route::patch('question','App\Http\Controllers\QuestionController@addToLesson');

Route::post('student_answer','App\Http\Controllers\StudentAnswerController@create');
