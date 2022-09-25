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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('trial');
    
// Admin Routes

Route::get('admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'getDashboard'])->name('admin.dashboard');//->middleware('admin');
Route::get('admin/dashboard/{id}/upgrade-plan', [App\Http\Controllers\Admin\AdminController::class, 'upgradeUserPlan'])->name('upgrade.user_status');

//User Routes
Route::get('quizzes', [App\Http\Controllers\QuizController::class, 'displayQuizzes'])->name('quizzes'); //->middleware('verify.payment'); //verify payment
Route::get('/quiz/{subject}', [App\Http\Controllers\QuizController::class, 'quizGenerator'])->name('display.quiz');
Route::get('/questions', [App\Http\Controllers\QuestionsController::class, 'showQuestions'])->name('show.questions');
Route::get('/questions/{subject}', [App\Http\Controllers\QuestionsController::class, 'subjectQuestions'])->name('subject.questions');
Route::post('/questions-by-subject', [App\Http\Controllers\VerifyAnswerController::class, 'verifyAnswer'])->name('verify.answer');
Route::get('questions/{subject}/{id}', [App\Http\Controllers\QuestionsController::class, 'getQuestion'])->name('single.question');
Route::get('/questionsby-subject', [App\Http\Controllers\QuestionsController::class, 'sortQuestions'])->name('sort.questions');
Route::get('questions/{subject}/{next_qid}', [App\Http\Controllers\QuestionsController::class, 'nextQuestion'])->name('next.question');
Route::get('teams', [App\Http\Controllers\TeamController::class, 'getTeams'])->name('teams');
Route::get('teams/{name}', [App\Http\Controllers\TeamController::class, 'getTeamDetail'])->name('team.detail');
// Route::get('weekly-challenge', [App\Http\Controllers\WeeklyChallengesController::class, 'getChallengeQuestions'])->name('weekly.challenge');
Route::get('/weekly-challenge', [App\Http\Controllers\WeeklyChallengesController::class, 'renderChallenge'])->name('weekly.challenge');
Route::post('/weekly-challenge/post', [App\Http\Controllers\WeeklyChallengesController::class, 'postScore']);
Route::get('/weekly-challenge/leadersboard', [App\Http\Controllers\WeeklyChallengesController::class, 'leadersBoard'])->name('leaders.board');
Route::post('/weekly-challenge/leadersboard/week', [App\Http\Controllers\WeeklyChallengesController::class, 'postleadersBoard']);
Route::get('user_questions/create-user-question', [App\Http\Controllers\UserQuestionsController::class, 'createUserQuestion'])->name('create.user.question');
Route::post('/post_question', [App\Http\Controllers\UserQuestionsController::class, 'postQuestion'])->name('post.question');
Route::get('/user_questions/', [App\Http\Controllers\UserQuestionsController::class, 'index'])->name('user.questions');
Route::get('/user_questions/{id}', [App\Http\Controllers\UserQuestionsController::class, 'userQuestionShow'])->name('user_question.detail');
Route::get('/user_questions/{id}/edit', [App\Http\Controllers\UserQuestionsController::class, 'editQuestion'])->name('edit.question');
Route::put('user_questions/{id}/edit', [App\Http\Controllers\UserQuestionsController::class, 'unpdateQuestion'])->name('update.question');
Route::delete('/user_questions/{id}/delete', [App\Http\Controllers\UserQuestionsController::class, 'deleteQuestion'] )->name('delete.question');
Route::post('/users_questions/{id}/answer', [App\Http\Controllers\AnswerController::class, 'postAnswer'])->name('post.answer');
Route::get('/answers/{id}/edit', [App\Http\Controllers\AnswerController::class, 'editAnswer'])->name('edit.answer');
Route::put('/answers/{id}/edit', [App\Http\Controllers\AnswerController::class, 'updateAnswer']);
Route::delete('/answers/{id}/delete', [App\Http\Controllers\AnswerController::class, 'deleteAnswer'])->name('answer.delete');
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'getPaymentProcessor'])->name('payment');
Route::post('/payment', [App\Http\Controllers\PaymentController::class, 'postPaymentProcessor'])->name('post.payment');
// Quest
Route::get('quest', [App\Http\Controllers\QuestController::class, 'index']);
Route::get('quest/add-question', [App\Http\Controllers\QuestController::class, 'create'])->name('add.question');

// Analytics
Route::get('analytics', [App\Http\Controllers\AnalyticsController::class, 'analyseUsersContent'])->name('analytics');

});





