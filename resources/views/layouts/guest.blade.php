<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    
    <body class="login-container h-full" style="background-image: url('/assets/img/bg-login.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <x-main-nav></x-main-nav>
        <div class="p-2 sm:ml-32 sm:p-4">
            <div class="flex flex-col w-full sm:w-1/3">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
