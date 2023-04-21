<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('build/assets/app.0d36ec97.css')}}">
        <link rel="stylesheet" href="{{ asset('build/assets/app.b2f340a8.css')}}">
        <script src="{{asset('build/assets/app.9cb818dc.js')}}"></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <script src="{{asset('build/assets/app.9cb818dc.js')}}"></script>
    </body>
</html>
