
<style>
.subject-icon{

    width: 45px;
    height: 45px;
    border-radius: 10px;
    padding: 5px;
}
</style>
<div class=" grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <img src="{{ asset('images/subjects/biology.png') }}" class="subject-icon bg-gray-100" />
            <div class="ml-4 font-semibold text-xl text-gray-800 leading-tight uppercase"><a href="{{ route('display.quiz', 'biology') }}">Biology</a></div>
        </div>

        <div class="ml-12">
            <a href="{{ route('display.quiz', 'biology') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        Take quiz
                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="#ffffff" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                    </button>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <img src="{{ asset('images/subjects/chemistry.png') }}" class="subject-icon bg-gray-100" />
            <div class="ml-4 font-semibold text-xl text-gray-800 leading-tight uppercase"><a href="{{ route('display.quiz', 'chemistry') }}">Chemistry</a></div>
        </div>

        <div class="ml-12">
            <a href="{{ route('display.quiz', 'chemistry') }}">
                <div class="mt-3 flex items-right text-sm font-semibold text-indigo-700">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        Take Quiz
                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="#ffffff" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                    </button>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200">
        <div class="flex items-center">
            <img src="{{ asset('images/subjects/physics.png') }}" class="subject-icon bg-gray-100" />
            <div class="ml-4 font-semibold text-xl text-gray-800 leading-tight uppercase"><a href="{{ route('display.quiz', 'physics') }}">Physics</a></div>
        </div>

        <div class="ml-12">
            <a href="{{ route('display.quiz', 'physics') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        Take quiz
                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="#ffffff" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                    </button>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-l border-b">
        <div class="flex items-center">
            <img src="{{ asset('images/subjects/gen_know.png') }}" class="subject-icon bg-gray-100" />
            <div class="ml-4 font-semibold text-xl text-gray-800 leading-tight uppercase"><a href="{{ route('display.quiz', 'general-knowledge') }}">General Knowledge</div>
        </div>

        <div class="ml-12">
            <a href="{{ route('display.quiz', 'general-knowledge') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        Take Quiz
                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="#ffffff" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                    </button>
                </div>
            </a>
        </div>
    </div>
    <div class="p-6 border-t border-gray-200 md:border-t-1">
        <div class="flex items-center">
            <img src="{{ asset('images/subjects/language.png') }}" class="subject-icon bg-gray-100" />
            <div class="ml-4 font-semibold text-xl text-gray-800 leading-tight uppercase"><a href="{{ route('display.quiz', 'language') }}">Language</a></div>
        </div>

        <div class="ml-12">
            <a href="{{ route('display.quiz', 'language') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        Take Quiz
                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="#ffffff" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                    </button>
                </div>
            </a>
        </div>
    </div>
    <div class="p-6 border-t border-gray-200 md:border-l border-b">
        <div class="flex items-center">
            <img src="{{ asset('images/subjects/examination.png') }}" class="subject-icon bg-gray-100" />
            <div class="ml-4 font-semibold text-xl text-gray-800 leading-tight uppercase"><a href=" @if(auth()->user()->is_premium == 1){{ route('display.quiz', 'exam-standard') }} @else {{ route('payment') }} @endif">Sample Exam <small class="text-red-600">[Available for premium users only]</small></div>
        </div>

        <div class="ml-12">
            <a href=" @if(auth()->user()->is_premium == 1){{ route('display.quiz', 'exam-standard') }} @else {{ route('payment') }} @endif">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        Take Quiz
                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="#ffffff" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                    </button>
                </div>
            </a>
        </div>
    </div>
</div>
