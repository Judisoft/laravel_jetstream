<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight uppercase">
            {{__('Medxam Teams')}} 
        </h2>
    </x-slot>
    <div class="min-h-screen flex flex-col bg-gray-200 items-center pt-6 sm:pt-0">
        <div class="w-full bg-white sm:max-w-2xl mt-6 p-5  shadow-md overflow-hidden sm:rounded-lg prose">
            @foreach ($teams as $team)
                <div><a href="{{ route('team.detail', $team->id) }}">{{ $team->name }}</a></div>
            @endforeach
            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <a href="#" class="ml-1 underline">
                            Help desk
                        </a>
                        <a href="#" class="ml-4 underline">
                            Tutors
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Powered by StudentPortal-CM
                </div>
            </div>
        </div>
    </div>
</x-app-layout>