<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AnswerUpdate;
use App\Models\UserQuestion;

class AnswerController extends Controller
{
    public function postAnswer($id, Request $request)
    {
    
        $validated = $request->validate([
            'answer' => 'required|unique:answers'
        ],
        [
            'answer.required'=> 'The answer field cannot be empty',
            'answer.unique' => 'This answer already exists'
        ]);

        $answer = new Answer;

        $answer->user_question_id = $id;
        $answer->answer = $request->input('answer');
        $answer->user_id = Auth::user()->id;
       
        $answer->save();

        if($answer->id) 
        {
           
            Mail::to(UserQuestion::find($id)->answers[$id]->user->email)->send(new AnswerUpdate($answer));
            return redirect()->back()->with('success', 'Answer post success');
        } else {
            return redirect()->back()->with('error', 'Answer post failed');
        }
        
    }
}
