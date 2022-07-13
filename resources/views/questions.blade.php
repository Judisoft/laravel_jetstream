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
    </div>
    
</x-app-layout>