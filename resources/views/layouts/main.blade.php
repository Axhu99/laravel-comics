<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>

    <link rel="icon" href="{{ asset('images/dc-logo.png') }}" type="images/png">
    @vite('resources/js/app.js')
</head>

<body>
    {{-- HEADER --}}
    <header>
        <nav class="navbar">
            <figure>
                <img src="{{ asset('images/dc-logo.png') }}" alt="Logo DC">
            </figure>
            <ul class="navbar-ul">
                <li><a href="">CHARACTERS</a></li>
                <li><a href="">COMICS</a></li>
                <li><a href="">MOVIES</a></li>
                <li><a href="">TV</a></li>
                <li><a href="">GAMES</a></li>
                <li><a href="">COLLECTIBLES</a></li>
                <li><a href="">VIDEOS</a></li>
                <li><a href="">FANS</a></li>
                <li><a href="">NEWS</a></li>
                <li><a href="">SHOP</a></li>
            </ul>
        </nav>
        <div class="jumbotron"></div>
    </header>
    {{-- MAIN --}}
    <main>
        @yield('main-content')
    </main>
    {{-- FOOTER --}}
    <footer>

    </footer>
</body>

</html>
