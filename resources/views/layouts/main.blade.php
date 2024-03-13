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
        <section class="footer-top">
            <div class="container top-background">
                <div class="footer-list">
                    <ul>
                        <li class="li-title">Dc Comics</li>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Comics</a></li>
                        <li><a href="">Movies</a></li>
                        <li><a href="">TV</a></li>
                        <li><a href="">Games</a></li>
                        <li><a href="">Videos</a></li>
                        <li><a href="">News</a></li>
                    </ul>
                    <ul>
                        <li class="li-title">Shop</li>
                        <li><a href="">Shop DC</a></li>
                        <li><a href="">Shop DC collectibles</a></li>
                    </ul>
                    <ul>
                        <li class="li-title">Dc</li>
                        <li><a href="">Terms Of Use</a></li>
                        <li><a href="">Privacy Policy (New)</a></li>
                        <li><a href="">Ad Choices</a></li>
                        <li><a href="">Advertising</a></li>
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Subscriptions</a></li>
                        <li><a href="">Talent Workshops</a></li>
                        <li><a href="">CPCS Certificates</a></li>
                        <li><a href="">Ratings</a></li>
                        <li><a href="">Shop Help</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                    <ul>
                        <li class="li-title">Sites</li>
                        <li><a href="">Dc</a></li>
                        <li><a href="">MAD Magazine</a></li>
                        <li><a href="">DC Kids</a></li>
                        <li><a href="">DC Universe</a></li>
                        <li><a href="">DC Power Visa</a></li>
                    </ul>
                </div>
                <div class="logo">
                </div>
            </div>
        </section>
        <section class="footer-bot">
            <div class="container">
                <div class="footer-sign">
                    <div class="button-sign">
                        <a href="">SIGN-UP NOW</a>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href=""><img src="{{ asset('images/footer-facebook.png') }}"
                                        alt=""></a>
                            </li>
                            <li><a href=""><img src="{{ asset('images/footer-periscope.png') }}"
                                        alt=""></a>
                            </li>
                            <li><a href=""><img src="{{ asset('images/footer-pinterest.png') }}"
                                        alt=""></a>
                            </li>
                            <li><a href=""><img src="{{ asset('images/footer-twitter.png') }}"
                                        alt=""></a>
                            </li>
                            <li><a href=""><img src="{{ asset('images/footer-youtube.png') }}"
                                        alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>
