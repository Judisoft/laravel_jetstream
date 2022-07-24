<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Question') }}
            </h2>
            <a href="{{ route('create.user.question') }}" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Ask a Question</a>
        </div>
    </x-slot>
    <div class="min-h-screen ml-3 mr-3 flex flex-col bg-gray-100 overflow-hidden items-center md:mx-32 sm:mx-32">
        <h1 class="uppercase font-bold p-3 text-2xl">Edit Question</h1>
        <div class="w-full bg-white sm:max-w-2xl mt-6 p-5 rounded-md  shadow-md overflow-hidden sm:rounded-lg prose">
            <h3 class="bg-gray-100 p-3 font-bold ">{!! $user_question->content !!} </h3>
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
            <form method="POST" action="{{ route('update.question', $user_question->id) }}">
                @method('PUT')
                @csrf
                <div class="px-4 py-5 sm:p-6 mx-auto">
                    
                    <select name="subject" class="w-36 rounded">
                        <option value="">select subject</option>
                        <option value="biology" @if ($user_question->subject == 'biology') selected @endif>Biology</option>
                        <option value="chemistry" @if ( $user_question->subject == 'chemistry') selected @endif>Chemistry</option>
                        <option value="general_knowledge" @if ( $user_question->subject == 'general_knowledge') selected @endif>General Knowledge</option>
                        <option value="language" @if ( $user_question->subject == 'language') selected @endif>Language</option>
                        <option value="physics" @if ($user_question->subject == 'physics') selected @endif>Physics</option>
                    </select>
                </div>
                <div class="px-4 py-5 sm:p-6 mx-auto">
                    <div class="col-span-4 sm:col-span-4">
                        {{-- <x-jet-label for="name" value="{{ __('Post Questions') }}" /> --}}
                        <textarea id="editor1" name="content"  rows="8" class="mt-1 block w-full" placeholder="Type question ..." autofocus>{!! $user_question->content !!}</textarea>
                    </div>
                </div>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{ __('Update') }}
                    </button>
                </div>
            </form>
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