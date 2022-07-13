<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight uppercase">
            {{ $subject }} 
        </h2>
    </x-slot>
    <div class="flex flex-col p-4 mt-6 mx-8 w-half bg-white rounded-lg overflow-hidden shadow hover:shadow-md">
        <div id="alertMessage" class="text-white px-4 py-3 rounded relative" role="alert" style="display:none;">
            <strong class="font-bold" id="message"></strong>
        </div>
        <h1 class="text-xl font-bold p-3">{!! $question->content !!}</h1>
        <fieldset id="{{ $question->id }}">
            {{-- <form> --}}
                <div class="flex  items-center p-5 ml-3 ">
                    <input  type="radio" name="choice" value="A" id="{{ $question->id }}" class="w-6 h-6 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="A" class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-300">{!! $question->A  !!}</label>
                </div>
                <div class="flex items-center p-5 ml-3">
                    <input  type="radio" name="choice" value="B" id="{{ $question->id }}" class="w-6 h-6 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="B" class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-300">{!! $question->B  !!}</label>
                </div>
                <div class="flex items-center p-5 ml-3">
                    <input  type="radio" name="choice" value="C" id="{{ $question->id }}" class="w-6 h-6 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="C" class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-300">{!! $question->C  !!}</label>
                </div>
                <div class="flex items-center p-5 ml-3 mb-3">
                    <input  type="radio" name="choice" value="D" id="{{ $question->id }}" class="w-6 h-6 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="D" class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-300">{!! $question->D  !!}</label>
                </div>
                <div class="flex items-center p-5 ml-3 mb-3" id="verifyAnswer">
                    <button onclick="verifyAnswer()" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Check Answer</button>
                </div>
                <div class="flex items-center p-5 ml-3 mb-3" id="nextQ" style="display:none;">
                    <a href="{{ route('next.question', [$subject, $next_qid])}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Next Question</a>
                </div>
                
            {{-- </form> --}}
        </fieldset>
    </div>
    <script>
        let question = {!! json_encode($question) !!}
        let subject = {!! json_encode($subject) !!}
        // console.log(question.answer)
        function verifyAnswer() {
            let choices = document.getElementsByName('choice')

            for(i = 0; i < choices.length; i++) {
                
                if(choices[i].checked) {

                    if(choices[i].value == question.answer) {
                        
                        document.getElementById('alertMessage').style.cssText = "display:block;background-color:#10D898;"
                        document.getElementById('message').innerHTML = "<span class='fa fa-check-circle'></span> Correct Answer, Good Job !"
                        document.getElementById('nextQ').style.display = 'block'
                        document.getElementById('verifyAnswer').style.display = 'none'
                        // let nextId = question.id + 1
                        // console.log(nextId)

                    } else {
                        document.getElementById('alertMessage').style.cssText = "display:block;background-color:#D60808;"
                        document.getElementById('message').innerHTML = "<span class='fa fa-times-circle'></span> Incorrect answer! Try again."
                    }
                    
                } 
                
            }
        }
    </script> 
</x-app-layout>