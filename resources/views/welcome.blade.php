<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        

        @livewireStyles()
        <style>
           .dropdown {
              position: relative;
              display: inline-block;
            }
            
            .dropdown-content {
              display: none;
              position: absolute;
              min-width: 160px;              
              z-index: 1;
            }
            
            .dropdown:hover .dropdown-content {
              display: block;
            }
           
        </style>
    </head>
    <body>
        <div id="app"></div>



        @livewireScripts()
        <script></script>
    </body>
</html>
