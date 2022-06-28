<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ $subject.' '. __('quiz') }}
        </h2>
    </x-slot>
    @livewire('quiz', ['questions' => $questions, 'subject' => $subject])
    
</x-app-layout>