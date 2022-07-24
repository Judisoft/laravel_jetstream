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
            
            Mail::to(UserQuestion::find($id)->user->email)->send(new AnswerUpdate($answer));
            return redirect()->back()->with('success', 'Answer post success');
        } else {
            return redirect()->back()->with('error', 'Answer post failed');
        }
        
    }

    public function editAnswer($id)
    {
        $answer = Answer::find($id);
        return view('answers.edit', compact('answer'));

    }


    public function updateAnswer(Request $request, $id)
    {
        
        $validated = $request->validate([
            'answer' => 'required|unique:answers'
        ],
        [
            'answer.required'=> 'The answer field cannot be empty',
            'answer.unique' => 'This answer already exists'
        ]);

        $answer = Answer::find($id);
        $answer->user_question_id = $answer->user_question->id;
        $answer->answer = $request->input('answer');
        $answer->user_id = Auth::user()->id;
       
        $answer->update();

        if($answer->update()) 
        {
            Mail::to(UserQuestion::find($id)->user->email)->send(new AnswerUpdate($answer));
            return redirect()->back()->with('success', 'Answer post success');
        } else {
            return redirect()->back()->with('error', 'Answer post failed');
        }

    }

    public function deleteAnswer($id)
    {
        $answer = Answer::find($id);
        if(auth()->user()->id == $answer->user_id) {
            $answer->delete();
            return redirect()->back()->with('success', 'Answer deleted successfully');
        } else {
            return redirect()->back()->with('errors', 'You don\'t delete this answer');
        }
        
    }

}
