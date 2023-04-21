<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/isplogo.png" type="image/x-icon">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('build/assets/app.0d36ec97.css')}}">
    <link rel="stylesheet" href="{{ asset('build/assets/app.b2f340a8.css')}}">
    

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
    <script src="{{asset('build/assets/app.9cb818dc.js')}}"></script>
    
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
