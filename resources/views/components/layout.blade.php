<!-- resources/views/components/layout.blade.php -->

<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>

        <script src="https://cdn.tailwindcss.com"></script>
        {{ $styles ?? ''  }}


    </head>
    <body class="container my-10 mx-auto max-w-lg">
        <h1 class="text-2xl font-bold">Todos</h1>
        @if (session()->has('success'))
            <p style="color: green">
                {{ session()->get('success') }}
            </p>

        @endif
        <hr/>
        {{ $slot }}
    </body>

    <footer class="mt-5">
        <p> {{ $footer ?? 'Footer page' }} </p>
    </footer>
</html>
