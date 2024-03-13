<header>
    <nav class="navbar">
        <figure>
            <img src="{{ asset('images/dc-logo.png') }}" alt="Logo DC">
        </figure>
        <ul class="navbar-ul">
            <li><a href="{{ url('/') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">CHARACTERS</a>
            </li>
            <li><a href="{{ route('comics') }}" class="{{ request()->routeIs('comics') ? 'active' : '' }}">COMICS</a></li>
            <li><a href="">MOVIES</a></li>
            <li><a href="">TV</a></li>
            <li><a href="">GAMES</a>
            </li>
            <li><a href="">COLLECTIBLES</a></li>
            <li><a href="">VIDEOS</a>
            </li>
            <li><a href="">FANS</a></li>
            <li><a href="">NEWS</a></li>
            <li><a href="">SHOP</a></li>
        </ul>
    </nav>
    <div class="jumbotron"></div>
</header>
