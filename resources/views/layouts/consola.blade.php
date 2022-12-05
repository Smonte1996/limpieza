<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        <link href="{{ asset('resources/css/app.css') }}" rel="sylesheet">
        <title>Ransa | @yield('Titulo')</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

    </head>
    <body class="bg-green-700">
      <header class="p-5 border-b bg-white shadow">
        <div class="container w-full flex justify-between items-center">
            <img src="{{ asset('img/ran.png')}}" alt="logo-ransa">

            <div class="hidden md:block">
                <!-- Profile dropdown -->
                <div class="relative ml-3">
                  <div>
                    <button type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                      <span class="sr-only">Open user menu</span>
                      <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </button>
                  </div>
  
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                    <div class="px-4 py-3">
                      <span class="block text-sm text-gray-900 dark:text-white">Steven Montenegro</span>
                      <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">Smontenegrot@ransa.net</span>
                    </div>
                    <ul class="py-1" aria-labelledby="user-menu-button">
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Perfil</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Cerrar Sesion</a>
                      </li>
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
            </div>
      </header>
      <main class="container">
      @include('layouts.menu')
      </main>
       @yield('contenido')
      <footer class="mt-10 text-center p-5 text-white font-bold uppercase">
         Ransa - Todo los dereches recervado &copy; {{now()->year}}
      </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</html>