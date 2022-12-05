@extends('layouts.app')
{{--El archivo welcome en la parte del index es la que se inicia por defoult--}}
@section('Titulo')

Servicio No Conforme Cliente

@endsection
@section('contenido')
<div class="md:flex md:justify-center md:items-center">
    <div class="md:flex rounded-lg shadow-lg md:w-6/10 bg-green-400">
      <div class="md:w-1/2 p-5">
          <img src="{{asset('img/Login.png')}}" alt="IMG">
        </div>
        <div class="md:w-3/6 p-6 mt-12">
        <form method="get" action="{{route('login')}}">
            @csrf 
          <div class="relative flex items-center text-black mb-6" data-validate="Validar Correo Requerido: ex@abc.xyz">
            <span class="w-5 h-7 absolute ml-3 pointer-events-none"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="3" y="5" width="18" height="14" rx="2" />
                <polyline points="3 7 12 13 21 7" />
              </svg></span>
            <input  class="border p-2 pr-3 pl-12 w-full rounded-3xl focus:outline-none focus:border-lime-400 focus:ring-lime-800 block focus:ring-4" autocomplete="on" type="email" name="email" :value="old('email')" placeholder="Correo Electrónico" />
          </div>

          <div class="relative flex items-center text-black mb-6" data-validate="Contraseña es requerida">
            <span class="w-5 h-7 absolute ml-3 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="5" y="11" width="14" height="10" rx="2" />
                    <circle cx="12" cy="16" r="1" />
                    <path d="M8 11v-4a4 4 0 0 1 8 0v4" />
                  </svg>
            </span>
            <input class="border p-2 pr-3 pl-12 w-full rounded-3xl focus:outline-none focus:border-lime-400 focus:ring-lime-800 block focus:ring-4" autocomplete="current-password" type="password" autocomplete="off" name="password" placeholder="Contraseña">
          </div>
            <div class=" items-center ">
                <label class="text-white" for="remember_me">
                 <input type="checkbox" class="focus:outline-none focus:border-lime-400 focus:ring-lime-400 focus:ring-2 transition-shadow accent-lime-400 cursor-pointer">  Recordarme
                </label>
            </div>

          <div class=" p-4">
            <input type="submit" value="Iniciar" class="bg-green-500 hover:bg-green-800 transition-colors cursor-pointer uppercase font-bold w-full p-2 text-black hover:text-white rounded-3xl">
          </div>

          <div class="text-center ">
            <span class="text-gray-500">
              ¿Olvidó
            </span>
            <a class="text-black hover:text-green-700 transition-opacity" href="forgot-password">
              Usuario / Contraseña?
            </a>
          </div>
        </form>
        </div>
    </div>
</div>
@endsection
