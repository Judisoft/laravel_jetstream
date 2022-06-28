@foreach ($questions as $question)
    <div class="flex flex-col p-4 mt-6 mx-8 w-half bg-white rounded-lg overflow-hidden shadow hover:shadow-md">
        <h1 class="text-3xl font-bold p-3">{!! $question->content !!}</h1>
        <fieldset id="{{ $question->id }}">
            <div class="flex  items-center p-5 ml-3 ">
                <input  type="radio" name="{{ $question->id }}" value="A" id="{{ $question->id }}" class="w-6 h-6 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="A" class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-300">{!! $question->A  !!}</label>
            </div>
            <div class="flex items-center p-5 ml-3">
                <input  type="radio" name="{{ $question->id }}" value="B" id="{{ $question->id }}" class="w-6 h-6 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="B" class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-300">{!! $question->B  !!}</label>
            </div>
            <div class="flex items-center p-5 ml-3">
                <input  type="radio" name="{{ $question->id }}" value="C" id="{{ $question->id }}" class="w-6 h-6 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="C" class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-300">{!! $question->C  !!}</label>
            </div>
            <div class="flex items-center p-5 ml-3 mb-3">
                <input  type="radio" name="{{ $question->id }}" value="D" id="{{ $question->id }}" class="w-6 h-6 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="D" class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-300">{!! $question->D  !!}</label>
            </div>
            <div class="flex items-center p-5 ml-3 mb-3">
                <button wire:click="nextQuestion({{ $question }})" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Next</button>
            </div>
        </fieldset>
    </div> 
@endforeach
