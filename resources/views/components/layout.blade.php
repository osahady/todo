<!-- resources/views/components/layout.blade.php -->

<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        {{ $styles ?? ''  }}


    </head>
    <body class="container my-10 mx-auto max-w-lg">
        <h1 class="text-2xl font-bold">Todos</h1>
        @if (session()->has('success'))

            <div x-data="{open: true}" x-show="open" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session()->get('success') }}
                </span>
                <span x-on:click="open=false" class="absolute top-0 right-0 px-4 py-3 text-3xl cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </span>
            </div>
        @endif

        <hr/>
        {{ $slot }}
    </body>

    <footer class="mt-5">
        <p> {{ $footer ?? 'Footer page' }} </p>
    </footer>
</html>
