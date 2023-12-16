

<x-layout>
    <x-slot name="title">
        <h1>Tasks</h1>
    </x-slot>

    <h1>Tasks</h1>
    <div>

        @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
        @empty
        <p> There are no tasks</p>
        @endforelse

    </div>

    <x-slot name="footer">
        <p> This is footer from x-layout</p>
    </x-slot>
</x-layout>
