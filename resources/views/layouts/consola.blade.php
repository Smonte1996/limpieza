<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="sylesheet">
        <title>Ransa | @yield('Titulo')</title>
        <script  src="{{ asset('js/app.js') }}" defer></script>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

    </head>
    <body class="bg-green-700">
      <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <img src="{{ asset('img/ran.png')}}" alt="logo-ransa">
    </div>
      </header>
      <main class="container mx-auto mt-10">
      @include('layouts.menu')
        @yield('navegacion-menu')
      </main>
      
      <footer class="mt-10 text-center p-5 text-white font-bold uppercase">
         Ransa - Todo los dereches recervado &copy; {{now()->year}}
      </footer>
    </body>
</html>