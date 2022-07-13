<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use Auth;

class AnswerController extends Controller
{
    public function postAnswer($id, Request $request)
    {
        $validated = $request->validate([
            'answer' => 'required'
        ],
        [
            'content.required'=> 'The answer field cannot be empty'
        ]);

        $answer = new Answer;

        $answer->user_question_id = $id;
        $answer->answer = $request->input('answer');

        $answer->save();

        if($answer->id) 
        {
            return redirect()->back()->with('success', 'Answer post success');
        } else {
            return redirect()->back()->with('error', 'Answer post failed');
        }
        
    }
}
