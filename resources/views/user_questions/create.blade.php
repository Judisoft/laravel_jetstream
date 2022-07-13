<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Question') }}
        </h2>
    </x-slot>
    <div class="min-h-screen ml-3 mr-3 flex flex-col bg-gray-100 overflow-hidden items-center md:mx-32 sm:mx-32">
        <h1 class="uppercase font-bold p-3 text-2xl">My Questions</h1>
        @forelse ($user_questions as $question)
            <div class="shadow-sm p-2 bg-white rounded-md  mr-auto mt-5 hover:shadow-md"  style="border-left:5px solid #E50914;">
                <a href="{{ route('user_question.detail', $question->id) }}">
                    <div class="px-2 sm:p-6 mx-auto" class="hover:bg-red-700">
                        <div class="col-span-8 sm:col-span-4">
                            <h3 class="font-semibold"> {!! $question->content !!} </h3>
                        </div>
                        <div class="flex justify-center mt-1 sm:items-center sm:justify-between">
                            <div class="text-center text-sm text-gray-500 sm:text-left">
                                <div class="flex items-center">
                                    <span href="#" class="ml-1 underline">
                                        @if(count($question->answers) > 0)
                                            {{$question->answers->count().' '.Str::plural('answer', $question->answers->count()) }}
                                        @else
                                            No answer yet
                                        @endif
                                    </span>
            
                                    <span href="#" class="ml-3 underline">
                                        {{ $question->created_at->diffForHumans() }}
                                    </span>
                                    <a href="{{ route('edit.question', $question->id) }}" class="ml-3 underline">
                                        {{ __('edit') }}
                                    </a>
                                    <a href="{{ route('delete.question', $question->id) }}" class="ml-3 underline">
                                        {{ __('delete') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @empty
        <p class="border p-6 rounded-md">We're excited to have you ask your first question</p>
        @endforelse
        <div class="w-full bg-white sm:max-w-2xl mt-6 p-5 rounded-md  shadow-md overflow-hidden sm:rounded-lg prose">
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
            <div class="bg-gray-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full" role="alert">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" width="50" height="50" class="mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                </svg>
                 {{ Session::get('success') }}
              </div>
            @endif
            <form method="POST" action="{{ route('post.question') }}">
                @csrf
                <div class="px-4 py-5 sm:p-6 mx-auto">
                    <div class="col-span-6 sm:col-span-4">
                        {{-- <x-jet-label for="name" value="{{ __('Post Questions') }}" /> --}}
                            {{-- <x-jet-label for="name" value="{{ __('Post Questions') }}" /> --}}
                        <select name="subject">
                            <option value="">select subject</option>
                            <option value="biology">Biology</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="general_knowledge">General Knowledge</option>
                            <option value="language">Language</option>
                            <option value="physics">Physics</option>
                        </select>
                    </div>
                </div>
                <div class="px-4 py-5 sm:p-6 mx-auto">
                    <div class="col-span-4 sm:col-span-4">
                        {{-- <x-jet-label for="name" value="{{ __('Post Questions') }}" /> --}}
                        <textarea id="editor" name="content"  rows="8" class="mt-1 block w-full" placeholder="Type question ..." autofocus>{{ old('content') }}</textarea>
                    </div>
                </div>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{ __('Post') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>
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