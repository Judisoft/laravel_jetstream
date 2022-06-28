<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;


class Quiz extends Component
{
   public $questions;
   public $subject;

    
    public function render()
    {
        // $questions = Question::first();
        return view('livewire.quiz'); 

    }

    // public function nextQuestion($question)
    // {
    //     $nextQuestion = Question::where('id', '>', $question['id'])->first();

    //     $question = $nextQuestion;
        
    //     return redirect()->back();
       
    // }
}
