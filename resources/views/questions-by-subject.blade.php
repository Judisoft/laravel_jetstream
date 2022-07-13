
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight uppercase">
            {{ $subject.' '. __('questions') }}
        </h2>
    </x-slot>
    @forelse ($questions as $question)
        <div class="w-96 p-2 mt-6 mx-8   bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md">
            <a href="{{ route('single.question', [ $question->subject, $question->id]) }}" class="text-l font-semibold p-8 py-3">{!! $question->content !!}</a>
        </div>
        @empty
        <div class="w-96 p-2 mt-6 mx-8 w-half bg-white rounded-lg overflow-hidden">
            No question yet
        </div>
    @endforelse
    <div class="text-right p-5 ml-3 mb-3"> {{ $questions->links() }} </div>
</x-app-layout>