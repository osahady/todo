<x-layout>
    <x-slot name="title">
        @isset($task) ? Edit Task : Create Task @endisset


    </x-slot>

    @isset($task)
        <h1>Edit Task</h1>
    @else
        <h1>Create Task</h1>
    @endisset

<div>
    <form action="{{ isset($task) ? route('tasks.update', ['task' => $task]) : route('tasks.store') }}" method="POST">

        @csrf
        @isset($task)
            @method('PUT')
        @endisset

        <div>
            <label class="block text-slate-700 my-2" for="title">Title</label>
            <input @class(['border  rounded p-2 w-full max-w-sm focus:outline-none', 'border-red-700' => $errors->has('title'), 'border-slate-700' => !$errors->has('title')]) type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}" placeholder="title">
            @error('title')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

        </div>
        <div>
            <label class="block text-slate-700 my-2" for="description">Description</label>
            <textarea @class(['border p-2 rounded w-full max-w-sm' ,'border-slate-700' => !$errors->has('description'), 'border-red-700' => $errors->has('description')]) name="description" id="description" cols="30" rows="5" placeholder="description">{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-slate-700 my-2 " for="long_description">Long Description</label>
            <textarea @class(['border rounded p-2 w-full max-w-sm' ,'border-slate-700' => !$errors->has('long_description'), 'border-red-700' => $errors->has('long_description')]) name="long_description" id="long_description" cols="30" rows="7">{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-4">
            <button class="py-2 px-4 bg-blue-700 text-white shadow-lg ring-1 ring-slate-700 rounded-lg hover:bg-blue-800 hover:font-normal" type="submit">
                @isset($task)
                    Update
                @else
                    Create
                @endisset
            </button>
        </div>
    </form>
</div>

</x-layout>
