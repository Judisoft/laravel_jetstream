<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Answer;

class AnswerUpdate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Answer $answer)
    {
        $this->answer = $answer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.answer_update')->with([
            'question' => $this->answer->user_question->content,
            'answer' => $this->answer->answer,
            'question_author' => $this->answer->user_question->user->name,
            'date' => $this->answer->created_at->diffForHumans()
        ]);
    }
}
