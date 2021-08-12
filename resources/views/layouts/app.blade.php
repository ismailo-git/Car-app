<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!--FONT AWESOME -->
    
</head>
<body class="bg-white h-screen antialiased leading-none font-body">
    <div id="app">
        <header class="bg-gray-700 py-6 shadow-md">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="/" class="text-white ml-3 font-semibold uppercase">Home</a>
                    @if (Auth::check())
                        <a href="{{ route('cars') }}" class="text-white ml-3 font-semibold uppercase">Deposer une voiture</a>
                    @endif
                    <a href="/cars" class="text-white ml-3 font-semibold uppercase">Voitures</a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                        <a class="no-underline text-white text-base uppercase" href="{{ route('login') }}">{{ __('Me connecter') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline text-white text-base uppercase" href="{{ route('register') }}">{{ __("M'inscrire") }}</a>
                        @endif
                    @else
                        <span class="text-white">{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline text-white"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Se déconnecter') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')
    </div>
</body>
</html>
