<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Score;
use App\Models\User;
use Auth;
use Carbon\Carbon;


class WeeklyChallengesController extends Controller
{
    public function getChallengeQuestions()
    {
        $questions = Question::where('subject', 'biology')->inRandomOrder()->limit(40)
                    ->where('subject', 'chemistry')->inRandomOrder()->limit(20)
                    ->where('subject', 'physics')->inRandomOrder()->limit(20)
                    ->where('subject', 'general_knowledge')->inRandomOrder()->limit(10)
                    ->where('subject', 'french')->inRandomOrder()->limit(10)
                    ->get();
        
        return view('weekly-challenge', compact('questions'));
    }

    public function renderChallenge()
    {
        $last_week_id = Score::max('week_id');

        // verify if user can take test
        $can_take_challenge = True;

        $user_current_week_id = Score::whereDate('created_at', '>=', Carbon::now()->startOfWeek()->format('Y-m-d H:i:s'))
        ->whereDate('created_at', '<=', Carbon::now()->endOfWeek()->format('Y-m-d H:i:s'))
        ->where('user_id', auth()->user()->id)
        ->max('week_id'); 
        
        if($user_current_week_id == $last_week_id)
        {
            $can_take_challenge = False;
        }

        // $questions = Question::where('subject', 'biology')->inRandomOrder()->limit(5)->get();
        // $questions = [];

        $max_questions = 100;

        $sub_quest_num = ['biology' => 40, 
        'chemistry' => 20,
         'physics' => 20, 
        'general_knowledge' => 10, 
        'french' => 10
            ];

        $subject = ['biology', 'chemistry', 'physics', 'general_knowledge', 'french'];

            // return dd(count($subject));

        for($i = 0; $i < count($subject); $i++)
        {
            $question = array(Question::where('subject', $subject[$i])->inRandomOrder()->limit($sub_quest_num[$subject[$i]])->get());

            $questions = array_merge([],$question);
            
            // return dd($questions);
        }

        

        return dd($questions);

        return view('weekly-challenge', compact('questions', 'last_week_id','can_take_challenge'));
    }

    public function postScore(Request $request) {

        $chal_score = new Score;
        $chal_score->week_id = $request->week_id;
        $chal_score->user_id = $request->user_id;
        $chal_score->score = $request->user_score;

        $chal_score->save();
        return response()->json('success', 201);
    }

    public function leadersBoard()
    {
        $current_week_id = Score::max('week_id');

        $user_scores = Score::where('week_id', $current_week_id)->orderBy('score', 'desc')->get();

        return view('leadersboard', compact('user_scores', 'current_week_id'));
    }

    public function postleadersBoard(Request $request)
    {
        return redirect()->back()->with($current_week_id);
    }
}
