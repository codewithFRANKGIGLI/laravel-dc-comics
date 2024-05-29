<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics Collection</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <div class="container text-center">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm gap-3">
                <a href="{{ route('home') }}" class="btn btn-success">Home</a>
                <a href="{{ route('comics.index') }}" class="btn btn-success">Collection</a>
                <a href="{{ route('comics.create') }}" class="btn btn-success">AGGIUNGI UN COMIC ALLA COLLEZIONE</a>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>

</body>

</html>
