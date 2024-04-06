<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BeerStagram - @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <header class=" bg-white p-5 shadow border-b">
        <div class="container mx-auto flex justify-between items-center ">

            <a class="font-black text-3xl" href="/">
                <h1>BeerStagram</h1>
            </a>

            <nav class="flex gap-5 font-semibold uppercase">
                <a href="#">Login</a>
                <a href="{{ route('register') }}">Sign up</a>
            </nav>

        </div>
    </header>
    <main>
        @yield('content')
    </main>


    <footer class="flex justify-center text-gray-600 font-semibold uppercase py-2 text-center">
        BeerStagram - all rights reserved {{ now()->year }}
    </footer>
</body>

</html>
