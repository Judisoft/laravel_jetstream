
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ $subject.' '. __('questions') }}
        </h2>
    </x-slot>
    {{-- @livewire('questions-by-subject', ['questions' => $questions, 'subject' => $subject]) --}}
    @foreach ($questions as $question)
        <div class="flex flex-col p-2 mt-6 mx-8 w-half bg-white rounded-lg overflow-hidden shadow hover:shadow-md">
            <a href="{{ route('single.question', [ $question->subject, $question->id]) }}" class="text-xl p-3">{!! $question->content !!}</a>
        </div>
    @endforeach
    <div class="text-right p-5 ml-3 mb-3"> {{ $questions->links() }} </div>
</x-app-layout>