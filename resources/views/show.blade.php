
<x-layout>
    <x-slot name="title">
        {{ $task->title }}
    </x-slot>

    This title from x-layout
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>

    <p>
        @if ($task->long_description)
            {{ $task->long_description }}
        @endif
    </p>

    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p>

    <a href="{{ url()->previous() }}">Previous</a> | <a href="{{ route('tasks.index') }}">Index</a> | <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit</a>

    <form action="{{ route('tasks.destroy', ['task' => $task]) }} " method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <x-slot name="footer">
        This is footer from x-layout
    </x-slot>
</x-layout>

