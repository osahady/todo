<!-- resources/views/components/layout.blade.php -->

<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
        {{ $styles ?? ''  }}
    </head>
    <body>
        <h1>Todos</h1>
        @if (session()->has('success'))
            <p style="color: green">
                {{ session()->get('success') }}
            </p>

        @endif
        <hr/>
        {{ $slot }}
    </body>

    <footer>
        <p> {{ $footer ?? 'Footer page' }} </p>
    </footer>
</html>
