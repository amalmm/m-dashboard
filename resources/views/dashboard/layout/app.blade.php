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
    </head>
    <body class="font-sans antialiased ">
        <div class="flex     ">

                 @include('dashboard.layout.nav')
                <!-- Page Content -->
                <main class="mx-auto max-w-screen-lg w-full space-y-6 p-5 text-gray-800">
                    <div class="  ">
                        <h2 class="font-bold text-xl   dark:text-gray-200   py-5">
                            {{ $header ?? 'header missing' }}
                        </h2>
                    </div>
                    {{ $body ?? '' }}
                 </main>
        </div>
      </body>
</html>
