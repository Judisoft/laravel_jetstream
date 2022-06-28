<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;

class QuestionsBySubject extends Component
{
    // public $subject;
    
    public function render($subject)
    {
        $questions = Question::where('subject', '=', $subject)->orderBy('topic')->paginate(10);
        return view('livewire.questions-by-subject', ['questions', $questions]);
    }

    public function verifyAnswer()
    {
        return dd('ok');
    }
}
