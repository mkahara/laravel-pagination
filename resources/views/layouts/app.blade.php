<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Add any additional styles here -->
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @endif

    <!-- Include Livewire styles -->
    @livewireStyles

</head>

<body>
    <div class="bg-gray-50 text-black dark:text-white/50">
        <div class="relative flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                <header>
                    <nav>
                        <a class="hidden" href="{{ url('/') }}">
                            Home
                        </a>
                    </nav>
                </header>

                <main class="bg-gray-50 text-black">
                    @yield('content')
                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </footer>

            </div>
        </div>
    </div>

    <!-- Include Livewire scripts -->
    @livewireScripts
</body>

</html>