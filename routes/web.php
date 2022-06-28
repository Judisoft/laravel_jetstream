<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
Route::get('/quiz/{subject}', [App\Http\Controllers\QuizController::class, 'displayQuiz'])->name('display.quiz');
Route::get('/questions', [App\Http\Controllers\QuestionsController::class, 'showQuestions'])->name('show.questions');
Route::get('/questions/{subject}', [App\Http\Controllers\QuestionsController::class, 'subjectQuestions'])->name('subject.questions');
Route::post('/questions-by-subject', [App\Http\Controllers\VerifyAnswerController::class, 'verifyAnswer'])->name('verify.answer');
Route::get('questions/{subject}/{id}', [App\Http\Controllers\QuestionsController::class, 'getQuestion'])->name('single.question');
Route::get('questions/{subject}/{next_qid}', [App\Http\Controllers\QuestionsController::class, 'nextQuestion'])->name('next.question');
});

Route::get('practice', [App\Http\Controllers\PracticeController::class, 'practice']);
