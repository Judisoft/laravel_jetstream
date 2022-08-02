<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayQuizzes()
    {
        
        return view('quizzes');
    }

    public function quizGenerator($subject) 
    {
        $questions = Question::where('subject', $subject)->inRandomOrder()->limit(20)->get();

        $biology = json_decode(json_encode(Question::where('subject', 'biology')->inRandomOrder()->limit(5)->get()), true);
        $chemistry = json_decode(json_encode(Question::where('subject', 'chemistry')->inRandomOrder()->limit(25)->get()), true);
        $physics = json_decode(json_encode(Question::where('subject', 'physics')->inRandomOrder()->limit(25)->get()), true);
        $general_knoledge = json_decode(json_encode(Question::where('subject', 'general_knowledge')->inRandomOrder()->limit(10)->get()), true);
        $french = json_decode(json_encode(Question::where('subject', 'french')->inRandomOrder()->limit(5)->get()), true);
        $english = json_decode(json_encode(Question::where('subject', 'english')->inRandomOrder()->limit(5)->get()), true);

        $exam_sample_questions = array_merge($biology,$chemistry,$physics,$general_knoledge,$french,$english);

        if($subject == 'exam-standard')
        {
            $questions = $exam_sample_questions;
        }
        
        // return dd($questions);

        return view('quiz-detail', compact('questions', 'subject', 'exam_sample_questions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
