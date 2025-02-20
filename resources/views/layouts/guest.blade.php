<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'JRLScore') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-24 sm:pt-0 bg-slate-950 dark:bg-slate-950">
            <!-- Texto de bienvenida -->
            @if (request()->routeIs('login'))
                <div class="mb-12 mt-12">
                    <h2 class="text-2xl font-normal text-white dark:text-white">{{ __('¡Bienvenido, inicia sesión!') }}</h2>
                </div>
            @endif

            {{-- icono app --}}
            <div>
                <a href="#">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-blue-600" /> --}}
                    <img src="{{ asset('images/login_image.png') }}" class="w-40 h-40">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-slate-950 dark:bg-slate-950 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
