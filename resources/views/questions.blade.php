<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-l text-gray-800 leading-tight uppercase">
            {{__('Subjects')}} 
        </h2>
    </x-slot>
    <style>
        .subject-icon{

            width: 45px;
            height: 45px;
            border-radius: 10px;
            padding: 5px;
        }
    </style>
    <div class="min-h-screen flex flex-col bg-gray-100 items-center ml-3 mr-3  md:mx-32 sm:mx-32">
        <div class="w-full bg-white  sm:max-w-2xl mt-6 pl-3 rounded-md  shadow-sm hover:shadow-md overflow-hidden sm:rounded-lg prose">
            <div class="flex items-center">
                <img src="{{ asset('images/subjects/biology.png') }}" class="subject-icon bg-gray-100" />
                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{route('subject.questions', 'biology')}}" class="text-gray-800 dark:text-white uppercase">Biology</a></div>
            </div>
        </div>
        <div class="w-full bg-white  sm:max-w-2xl mt-6 p-3  shadow-sm hover:shadow-md overflow-hidden sm:rounded-lg prose">
            <div class="flex items-center">
                <img src="{{ asset('images/subjects/chemistry.png') }}" class="subject-icon bg-gray-100" />
                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{route('subject.questions', 'chemistry')}}" class="text-gray-800 dark:text-white uppercase">Chemistry</a></div>
            </div>
        </div>
        <div class="w-full bg-white  sm:max-w-2xl mt-6 pl-3  shadow-sm hover:shadow-md overflow-hidden sm:rounded-lg prose">
            <div class="flex items-center">
                <img src="{{ asset('images/subjects/physics.png') }}" class="subject-icon bg-gray-100" />
                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{route('subject.questions', 'physics')}}" class="text-gray-800 dark:text-white uppercase">Physics</a></div>
            </div>
        </div>
        <div class="w-full bg-white  sm:max-w-2xl mt-6 pl-3  shadow-sm hover:shadow-md overflow-hidden sm:rounded-lg prose">
            <div class="flex items-center">
                <img src="{{ asset('images/subjects/gen_know.png') }}" class="subject-icon bg-gray-100" />
                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{route('subject.questions', 'general-knowledge')}}" class="text-gray-800 dark:text-white uppercase">General Knowledge</a></div>
            </div>
        </div>
        <div class="w-full bg-white  sm:max-w-2xl mt-6 pl-3  shadow-sm hover:shadow-md overflow-hidden sm:rounded-lg prose">
            <div class="flex items-center">
                <img src="{{ asset('images/subjects/language.png') }}" class="subject-icon bg-gray-100" />
                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{route('subject.questions', 'french')}}" class="text-gray-800 dark:text-white uppercase">Language</a></div>
            </div>
        </div>
        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">
                    Made with
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <a class="ml-1">
                        All rights reserved &copy; 2022
                    </a>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Medxam v1.0
            </div>
        </div>
    </div>
    
</x-app-layout>