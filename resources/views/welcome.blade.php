<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/isp logo.png" type="image/x-icon">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('aos/dist/aos.css')}}">    
    <link rel="stylesheet" href="{{asset('css/card.anime.css')}}">
    @livewireStyles()
    <style>
      .dropdown {
        position: relative;
        display: inline-block;
      }    
      .dropdown-content {
        display: none;
        position: absolute;
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
    <script src="{{asset('aos/dist/aos.js')}}"></script>
    <script>
      /* let a = AOS.init()
      console.log(a); */
      document.addEventListener("DOMContentLoaded", () => {
        console.log("Hello World!");
        AOS.init({
          duration: 1000,
        });
      });
    </script>
  </body>
</html>
