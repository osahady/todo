<x-layout>
    <x-slot name="title">
        @isset($task) ? Edit Task : Create Task @endisset


    </x-slot>

    <x-slot name="styles">
        <style>
            body {
                background-color: #f5f5f5;
            }
            .error {
                color: red;
                font-size: 0.8rem;
            }
        </style>
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
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}">
            @error('title')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="5">{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">long_description</label>
            <textarea name="long_description" id="long_description" cols="30" rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit">
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
