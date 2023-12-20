

<x-layout>
    <x-slot name="title">
        <h1>Tasks</h1>
    </x-slot>

    <h1 class="text-xl mb-4">Tasks</h1>
    <div class="my-4">
        <a class="py-2 px-4 text-white bg-blue-500 rounded" href="{{ route('tasks.create') }}">Create Task</a>
    </div>
    <div>

        @forelse ($tasks as $task)
        <div>
            <a @class(['font-bold' => !$task->completed, 'line-through' => $task->completed]) href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
        </div>
        @empty
        <p> There are no tasks</p>
        @endforelse

    </div>

    <x-slot name="footer">
        @if (count($tasks))
            {{ $tasks->links() }}
        @endif
    </x-slot>
</x-layout>
