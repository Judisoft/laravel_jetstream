
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight uppercase">
            {{ $subject.' '. __('questions') }}
        </h2>
    </x-slot>
    <form action="{{ route('subject.questions', $subject) }}" method="GET" class="p-3 px-3 bg-gray-800 flex justify-center">
        <select name="topic" class="w-3/4 rounded-md">
            <option value="">Sort questions by topic</option>
            @foreach ($topics as $topic)
                <option value="{!! $topic->topic !!}">{!! $topic->topic !!}</option>
            @endforeach
        </select>
        {{-- <button type="submit"class="inline-flex items-center justify-center px-4 py-3 bg-red-600 border border-transparent font-semibold text-sm text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Sort</button> --}}
    </form>
    @forelse ($questions as $question)
        <div class="w-3/4 p-2 mt-6 mx-auto px-6 bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md">
            <a href="{{ route('single.question', [ $question->subject, $question->id]) }}" class="text-l font-semibold p-8 py-3">{!! $question->content !!}</a>
        </div>
        @empty
        <div class="w-3/4 p-2 mt-6 mx-8 w-half bg-white rounded-lg overflow-hidden">
            No question yet
        </div>
    @endforelse
    <div class="text-right p-5 ml-3 mb-3 w-3/4"> {{ $questions->links() }} </div>
</x-app-layout>