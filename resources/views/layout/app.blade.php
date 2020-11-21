<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
  <head>
    <meta charset='config('app.charset')'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>
      @yield('title', config('app.name'))
    </title>
  </head>
    <body class="flex flex-col h-full">
      <header>
        <nav class="p-6 bg-white flex justify-between mb-6">
          <ul class="flex items-center">
            <li>
              <a href="" class="p-3">Accueil</a>
            </li>
            <li>
              <a href="" class="p-3">Livre en cours</a>
            </li>
            <li>
              <a href="{{ route('statistics') }}" class="p-3">Statistiques</a>
            </li>
            <li>
              <a href="" class="p-3">Ajout</a>
            </li>
          </ul>

          <ul class="flex items-center">
            <li>
              <a href="" class="p-3">Mon compte</a>
            </li>
            <li>
              <a href="" class="p-3">Deconnexion</a>
            </li>
          </ul>
        </nav>
      </header>
        <div class="flex-1 mx-auto">
          @yield('content')
        </div>
        <!-- to put footer sticky https://milanchheda.com/sticky-footer-using-tailwind-css !-->
        <footer class=" w-full bg-gray-500  text-center pin-b ">
          <div>
            Projet réalisé par Christian GEORGES sous Laravel 8
          </div>
        </footer>
</body>
</html>
