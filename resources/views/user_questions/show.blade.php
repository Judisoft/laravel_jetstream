<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Public Q&A') }}
            </h2>
            <a href="{{ route('create.user.question') }}" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Ask a question</a>
        </div>
    </x-slot>
    <div class="min-h-screen flex flex-col bg-gray-100 items-center md:mx-32 sm:mx-32">
        <div class="w-full bg-white  sm:max-w-2xl mt-6 p-5  shadow-md overflow-hidden sm:rounded-lg prose">
            <h1 class="uppercase">Question</h1>
            <h2 class="font-semibold text-xl leading-tight">
                {!! $user_question->content !!}
            </h2>
            <div class="flex justify-center mt-1 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <span class="ml-1">
                            @if(count($user_question->answers) > 0)
                            <span class="fa fa-comment px-2"></span>{{$user_question->answers->count().' '.Str::plural('answer', $user_question->answers->count()) }}
                            @else
                                No answer yet
                            @endif
                        </span>

                        <span href="#" class="ml-1">
                           <span class="fa fa-calendar px-2"></span> {{ $user_question->created_at->diffForHumans() }}
                        </span>
                        <span  class="ml-1">
                            <span class="fa fa-user px-2"></span> {{ $user_question->user->name }}
                        </span>
                    </div>
                </div>
            </div>
            <hr>
            @foreach ($user_question->answers->reverse() as $user_answer)
                <div class="flex flex-justify-center mt-2 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <div class="shrink-0 mr-3">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </div>
                            <div class="bg-gray-100 px-3 py-2 pb-3 mt-2 rounded font-semibold" style="border-left:5px solid #2EB67D;width:100%;">                 
                                <h3>{!! $user_answer->answer !!}</h3>
                                <div class="flex flex-row items-left text-xs">
                                    <span class="ml-3">
                                        <i class="fa fa-calendar px-2"></i>{{ $user_answer->created_at->diffForHumans() }}
                                    </span>
                                    <span class="ml-3">
                                        <i class="fa fa-user px-2"></i>{{ $user_answer->user->name }}
                                    </span>
                                    @if(auth()->user()->id == $user_answer->user_id)
                                        <a href="{{ route('edit.answer', $user_answer->id) }}" class="ml-3 underline-none">
                                            <i class="fa fa-edit px-2"></i>edit
                                        </a>
                                        <div class="ml-3">
                                            <form action="{{ route('answer.delete', $user_answer->id) }}" method="POST" >
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="ml-3"><i class="fa fa-trash px-2"></i>delete</button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @if ($errors->any())
                <div><hr>
                    <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('success'))
            <div class="bg-gray-100 rounded-lg mt-3 py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full" role="alert">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                </svg>
                 {{ Session::get('success') }}
              </div>
            @endif

            <form method="POST" action="{{ route('post.answer', $user_question->id) }}">
                @csrf
                <div class="px-4 py-5 sm:p-6 mx-auto">
                    <div class="col-span-4 sm:col-span-4">
                        <label for="answer" class="mb-3 text-l font-bold">Post an asnwer</label>
                        <textarea id="editor1" name="answer"  rows="4" class="mt-1 block w-full" placeholder="Type answer here ..." autofocus>{{ old('answer') }}</textarea>
                    </div>
                </div>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{ __('Post Answer') }}
                    </button>
                </div>
            </form>
            <div class="bg-gray-100 px-3 py-2 mt-2 rounded text-md font-semibold">                 
                <h2>Can't answer this questions?</h2>
                <p> copy this link <a href="{{ url()->current() }}">{{ url()->current() }} </a> and share with our tutors</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/ckeditor.js') }}"></script>
</x-app-layout>