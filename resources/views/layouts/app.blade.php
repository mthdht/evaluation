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

    <!-- Fonts -->
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 text-gray-700">
    <div id="app" class="h-screen flex flex-col relative">
        <header class="bg-white border-t-2 border-green-500 shadow z-10 px-4">
            <div class="container mx-auto md:flex justify-between relative text-center">
                <button class="absolute top-0 mt-3 left-0 ml-2 md:hidden hover-effect" @click="open">
                    <i class="fas fa-bars fa-lg"></i>
                </button>

                <a href="/" class="link hover:bg-green-500 hover:text-white text-2xl">Evaluation</a>

                <nav class="hidden md:flex">
                    @guest
                    <a href="{{ route('login') }}" class="link hover:bg-green-500 hover:text-white ">Connexion</a>
                    <a href="{{ route('register') }}" class="link hover:bg-green-500 hover:text-white ">Inscription</a>
                    @else
                    <div class="group relative flex items-center">
                        <a href="{{ route('dashboard') }}" class="link text-green-500 hover-effect hover:text-white hover:text-green-600"><i class="fas fa-user"></i></a>
                        <div class="dropdown flex flex-col absolute right-0 mt-24 w-40 hidden group-hover:block bg-white shadow text-left">
                            <a href="{{ route('dashboard') }}" class="link hover:bg-green-500 hover:text-white block">Dashboard</a>
                            <a href="{{ route('logout') }}" class="link hover:bg-green-500 hover:text-white block" @click.prevent="submit">Se déconnecter</a>
                            <form action="{{ route('logout') }}" method="post" class="hidden" ref="logout">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @endguest
                </nav>
            </div>
        </header>

        <navbar @close="close"
                :class="openNav ? 'block' : 'hidden'"
                active="{{ $active ?? '' }}"
                :auth="{{ Auth::check() ? 'true' : 'false' }}"
                csrf='{{ csrf_field() }}'></navbar>

        <main class="flex flex-col md:flex-row flex-grow">
            @auth
            <sidebar active="{{ $active }}"></sidebar>
            @endauth
            <section class="content flex-grow p-4">
            @yield('content')
            </section>
        </main>
    </div>
</body>
</html>
