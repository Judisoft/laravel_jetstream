
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Public Q&A') }}
            </h2>
            <a href="{{ route('create.user.question') }}" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Ask a Question</a>
        </div>
    </x-slot>
    <form action="#" method="GET" class="p-3 bg-gray-800 flex justify-center">
        <select name="topic" class="w-3/4 rounded-md">
            <option value="">Sort questions by subjects</option>
            @foreach ($subjects as $subject)
                <option value="{!! $subject->subject !!}">{!! $subject->subject !!}</option>
            @endforeach
        </select>
        {{-- <button type="submit"class="inline-flex items-center justify-center px-4 py-3 bg-red-600 border border-transparent font-semibold text-sm text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Sort</button> --}}
    </form>
    <div class="flex flex-col p-4 mt-6 mx-auto w-3/4  rounded-lg overflow-hidden">
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
        <div class="bg-gray-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-half" role="alert">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
            </svg>
            {{ Session::get('success') }}
        </div>
        @endif
        @forelse ($user_questions as $question)
            <div class="flex items-center w-half bg-white rounded-md shadow-sm p-3  mt-5 hover:shadow-md">
                <a href="{{ route('user_question.detail', $question->id) }}">
                    <div class="px-2 sm:p-6" class="hover:bg-red-700">
                        <div class="col-span-8 sm:col-span-4">
                            <h3 class="font-semibold pb-5"> {!! $question->content !!} </h3>
                        </div>
                        <div class="flex justify-center mt-1 sm:items-center ">
                            <div class="text-center text-sm text-gray-500 sm:text-left">
                                <div class="flex justify-center text-xs items-center">
                                    <span href="#" class="ml-1">
                                        @if(count($question->answers) > 0)
                                            <i class="fa fa-comment px-2"></i>{{$question->answers->count().' '.Str::plural('answer', $question->answers->count()) }}
                                        @else
                                            No answer yet
                                        @endif
                                    </span>
            
                                    <span href="#" class="ml-3">
                                        <i class="fa fa-calendar px-2"></i>{{ $question->created_at->diffForHumans() }}
                                    </span>
                                    <span href="#" class="ml-3">
                                        <i class="fa fa-user px-2"></i> {{ $question->user->name}}
                                    </span>
                                    @if(auth()->user()->id == $question->user_id)
                                        <a href="{{ route('edit.question', $question->id) }}" class="ml-3">
                                            <i class="fa fa-edit px-2"></i>{{ __('edit') }}
                                        </a>
                                        <form method="POST" action="{{ route('delete.question', $question->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" href="{{ route('delete.question', $question->id) }}" class="ml-3">
                                                <i class="fa fa-trash px-2"></i>{{ __('delete') }}
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @empty
        <p class="mt-5 font-semibold">No question asked yet</p>

        @endforelse
        {{-- @if(count($user_questions) > 25) --}}
            <div class="text-right p-2 ml-3 mb-3"> {{ $user_questions->links() }} </div>
        {{-- @endif --}}
    </div>
</x-app-layout>