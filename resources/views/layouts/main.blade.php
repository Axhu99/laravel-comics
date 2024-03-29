<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>

    <link rel="icon" href="{{ asset('images/dc-logo.png') }}" type="images/png">
    @vite('resources/js/app.js')

    {{-- CDNS --}}
    @yield('cdns')
</head>

<body>
    {{-- HEADER --}}
    @include('includes.header')
    {{-- MAIN --}}
    <main>
        @yield('main-content')
    </main>
    {{-- FOOTER --}}
    @include('includes.footer')

    {{-- SCRIPTS --}}
    @yield('scripts')
</body>

</html>
