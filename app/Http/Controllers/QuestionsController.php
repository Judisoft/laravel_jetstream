<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionsController extends Controller
{
    public function showQuestions()
    {
        $questions = Question::all();

        return view('questions', compact('questions'));
    }

    public function subjectQuestions($subject) 
    {
        $questions = Question::where('subject', '=', $subject)->orderBy('topic')->paginate(10);
        
        return view('questions-by-subject', compact('questions', 'subject'));
    }

    public function getQuestion($subject, $id) 
    {
        $question = Question::find($id);
        $next_qid = Question::where('id', '>', $id)->where('subject', $subject)->min('id');
        $previous_qid = Question::where('id', '<', $id)->where('subject', $subject)->max('id');
        $next_question = Question::find($next_qid);
        $previous_question = Question::find($previous_qid);

        return view('question-item', compact('question', 'subject', 'id', 'next_qid', 'next_question', 'previous_question'));
        
    }

}
