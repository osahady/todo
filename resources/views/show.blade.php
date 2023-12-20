
<x-layout>
    <x-slot name="title">
        {{ $task->title }}
    </x-slot>

    <h1 class="my-4 text-xl font-md">{{ $task->title }}</h1>
    <p class="text-slate-700 text-lg mb-4">{{ $task->description }}</p>
    <p class="text-slate-600 text-lg mb-4">
        @if ($task->long_description)
        {{ $task->long_description }}
        @endif
    </p>

    <p class="mb-4 text-slate-500 text-sm">Created: {{ $task->created_at->diffForHumans() }} | Updated: {{ $task->updated_at->diffForhumans() }}</p>

    <div @class(['p-4', 'text-white', 'font-bold', 'bg-red-600'=>!$task->completed, 'bg-green-600'=> $task->completed])>{{ $task->completed ? 'Completed' : 'Not Completed ' }}</div>
    <div class="flex items-start justify-center gap-2 my-4">
      <a class="py-2 px-4 bg-blue-300 text-blue-900 shadow-lg ring-1 ring-blue-700 rounded-lg hover:bg-blue-50 hover:font-normal" href="{{ route('tasks.create') }}">New</a>
      <a class="py-2 px-4 bg-slate-300 text-slate-900 shadow-lg ring-1 ring-slate-700 rounded-lg hover:bg-slate-50 hover:font-normal" href="{{ route('tasks.index') }}">Cancel</a>
      <a class="py-2 px-4 bg-slate-300 text-slate-900 shadow-lg ring-1 ring-slate-700 rounded-lg hover:bg-slate-50 hover:font-normal" href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit</a>

        <form action="{{ route('tasks.toggle', ['task'=> $task->id]) }}" method="POST">
            @csrf
            @method('PATCH')
            <button class="py-2 px-4 bg-slate-300 text-slate-900 shadow-lg ring-1 ring-slate-700 rounded-lg hover:bg-slate-50 hover:font-normal" type="submit">Mark as {{ $task->completed ? 'Not completed' : 'completed' }}</button>
        </form>

        <form action="{{ route('tasks.destroy', ['task' => $task]) }} " method="POST">
            @csrf
            @method('DELETE')
            <button class="py-2 px-4 bg-slate-300 text-slate-900 shadow-lg ring-1 ring-slate-700 rounded-lg hover:bg-slate-50 hover:font-normal" type="submit">Delete</button>
        </form>
      </div>


</x-layout>

