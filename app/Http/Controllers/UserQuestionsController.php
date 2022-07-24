<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserQuestion;
use App\Models\Question;
use App\Models\User;
use App\Models\Answer;

class UserQuestionsController extends Controller
{
    public function index()
    {
        $user_questions = UserQuestion::orderBy('created_at', 'desc')->paginate(25);
        $subjects = Question::select('subject')->distinct()->get();
        
        return view('user_questions.index', compact('user_questions', 'subjects'));
    }


    public function createUserQuestion()
    {
        $user_questions = UserQuestion::where('user_id', Auth::user()->id)->paginate(10);
        return view('user_questions.create', compact('user_questions'));
    }



    public function postQuestion(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required',
            'content' => 'required|unique:user_questions|min:8'
        ],
        [
            'subject.required' => 'The subject field is required',
            'content.required'=> 'The question field cannot be empty',
            'content.unique' => 'This question has already been asked'

        ]);

        $question = new UserQuestion;

        $question->user_id = Auth::user()->id;
        $question->subject = $request->input('subject');
        $question->content = $request->input('content');

        $question->save();
        if($question->id) 
        {
            return redirect()->back()->with('success', 'Question post success');
        } else {
            return redirect()->back()->with('error', 'Question post failed');
        }
        
        
    }

    public function userQuestionShow($id)
    {
        $user_question = UserQuestion::find($id);
       

        return view('user_questions.show', compact('user_question'));
    }


    public function editQuestion($id)
    {
        $user_question = UserQuestion::find($id);
    
        return view('user_questions.edit', compact('user_question'));

    }

    public function unpdateQuestion(Request $request, $id)
    {
        $validated = $request->validate([
            'subject' => 'required',
            'content' => 'required|unique:user_questions|min:8'
        ],
        [
            'subject.required' => 'The subject field is required',
            'content.required'=> 'The question field cannot be empty',
            'content.unique' => 'This question has already been asked'
        ]);

        $question = UserQuestion::find($id);
        $question->user_id = Auth::user()->id;
        $question->subject = $request->input('subject');
        $question->content = $request->input('content');

        $question->update();

        if($question->id) 
        {
            return redirect()->back()->with('success', 'Question edit success');
        } else {
            return redirect()->back()->with('error', 'Question edit failed');
        }
        
    }

    public function deleteQuestion($id)
    {
        $user_question = UserQuestion::find($id);

        if(auth()->user()->id == $user_question->user_id) {
            $user_question->delete();

            return redirect()->back()->with('success', 'Question deleted successfully');
        } else {
            return redirect()->back()->with('errors', 'You don\'t delete this answer');
        }
        
    }
}
