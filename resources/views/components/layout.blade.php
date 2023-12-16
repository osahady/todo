<!-- resources/views/components/layout.blade.php -->

<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
    </head>
    <body>
        <h1>Todos</h1>
        <hr/>
        {{ $slot }}
    </body>

    <footer>
        <p> {{ $footer ?? 'Footer page' }} </p>
    </footer>
</html>
