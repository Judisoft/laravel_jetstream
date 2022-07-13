
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Public Q&A') }}
            </h2>
            <a href="{{ route('create.user.question') }}" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Ask a question</a>
        </div>
    </x-slot>
    <div class="min-h-screen w-full  flex flex-col bg-gray-100 items-center mx-6 md:mx-32 sm:mx-32">
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
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
            </svg>
            {{ Session::get('success') }}
        </div>
        @endif
        @foreach ($user_questions as $question)
            <div class="bg-white rounded-md shadow-sm p-3 mr-auto mt-5 hover:shadow-md">
                <a href="{{ route('user_question.detail', $question->id) }}">
                    <div class="px-2 sm:p-6 mx-auto" class="hover:bg-red-700">
                        <div class="col-span-6 sm:col-span-4">
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
                                    <span href="#" class="ml-3 underline">
                                         {{ $question->user->name}}
                                    </span>
                                    <a href="{{ route('edit.question', $question->id) }}" class="ml-3 underline">
                                        {{ __('edit') }}
                                    </a>
                                    <form action="POST" action="{{ route('delete.question', $question->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a role="button" type="submit" href="{{ route('delete.question', $question->id) }}" class="ml-3 underline">
                                            {{ __('delete') }}
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        {{-- @if(count($user_questions) > 25) --}}
            <div class="text-right p-2 ml-3 mb-3"> {{ $user_questions->links() }} </div>
        {{-- @endif --}}
    </div>
</x-app-layout>