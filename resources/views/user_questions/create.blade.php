<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Public Q&A') }}
            </h2>
            <a href="{{ route('user.questions') }}" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">View Questions</a>
        </div>
    </x-slot>
    <div class="min-h-screen flex flex-col  bg-gray-100 items-center md:mx-32 sm:mx-32">
        <h1 class="uppercase font-bold p-3 text-2xl">Post Question</h1>
        <div class="w-full bg-white border sm:max-w-2xl mt-6 p-5 rounded-md  overflow-hidden sm:rounded-lg prose">
            @if ($errors->any())
                <div>
                    <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('success'))
                <div class="rounded-lg bg-gray-100 py-5 text-white px-6 mb-3 text-base text-green-700 inline-flex items-center w-full" role="alert">
                    <span class="fa fa-check-circle px-2"></span>
                    {{ Session::get('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('post.question') }}">
                @csrf
                <div class="px-4 py-5 sm:p-6">
                    <div class="col-span-6 sm:col-span-4">
                        {{-- <x-jet-label for="name" value="{{ __('Post Questions') }}" /> --}}
                            {{-- <x-jet-label for="name" value="{{ __('Post Questions') }}" /> --}}
                        <select name="subject" class="w-full">
                            <option value="">select subject</option>
                            <option value="biology">Biology</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="general_knowledge">General Knowledge</option>
                            <option value="english">English Language</option>
                            <option value="french">French Language</option>
                            <option value="physics">Physics</option>
                        </select>
                    </div>
                </div>
                <div class="px-4 py-5 sm:p-6 mx-auto">
                    <div class="col-span-4 sm:col-span-4">
                        {{-- <x-jet-label for="name" value="{{ __('Post Questions') }}" /> --}}
                        <textarea id="editor1" name="content"  rows="8" class="mt-1 block w-full" placeholder="Type question ..." autofocus>{{ old('content') }}</textarea>
                    </div>
                </div>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{ __('Post') }}
                    </button>
                </div>
            </form>
        </div>
        <h1 class="uppercase font-bold p-3 text-2xl">My Questions</h1>
        <div class="w-3/4 ">
            @forelse ($user_questions as $question)
            <a href="{{ route('user_question.detail', $question->id) }}">
                <div class="w-half bg-white px-2 rounded shadow:md hover:shadow-l mt-3 p-3 sm:p-6 ">
                    <h3 class="font-semibold"> {!! $question->content !!} </h3>
                    <div class="flex justify-center mt-1 sm:items-center sm:justify-between">
                        <div class="text-center text-sm text-gray-500 sm:text-left">
                            <div class="flex items-center">
                                <span href="#" class="ml-1 underline">
                                    @if(count($question->answers) > 0)
                                        <i class="fa fa-comment px-2"></i>{{$question->answers->count().' '.Str::plural('answer', $question->answers->count()) }}
                                    @else
                                        No answer yet
                                    @endif
                                </span>
        
                                <span href="#" class="ml-3 underline">
                                    <i class="fa fa-calendar px-2"></i>{{ $question->created_at->diffForHumans() }}
                                </span>
                                <a href="{{ route('edit.question', $question->id) }}" class="ml-3 underline">
                                    <i class="fa fa-edit px-2"></i>{{ __('edit') }}
                                </a>
                                <form method="POST"  action="{{ route('delete.question', $question->id) }}"> 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" href="{{ route('delete.question', $question->id) }}" class="ml-3 underline">
                                        <i class="fa fa-trash px-2"></i> {{ __('delete') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @empty
        <p class="border p-6 rounded-md">We're excited to have you ask your first question</p>
        @endforelse
        </div>
    </div>
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <script>
        function postQuestion() {
            let laravelToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            axios.post('/post_question', {
                // user_id = {{ auth()->user()->id }},
                content: document.getElementById("editor").value
            })
            .then(function(response) {
                console.log(response);
            })
            .catch(function(error) {
                console.log(error);
            })
        }
    </script>
</x-app-layout>