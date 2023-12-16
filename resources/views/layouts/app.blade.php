<!-- FILEPATH: /d:/xampp/htdocs/laravel10/todo/resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <!-- Add your CSS and JS files here -->
</head>
<body>
    <header>
        <h1>@yield('title')</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>
</body>
</html>
