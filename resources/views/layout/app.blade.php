<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset='config('app.charset')'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>
      @yield('title', config('app.name'))
    </title>
  </head>
    <body>
      
      <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
          <li>
            <a href="" class="p-3">Accueil</a>
          </li>
          <li>
            <a href="" class="p-3">Livre en cours</a>
          </li>
          <li>
            <a href="" class="p-3">Statistiques</a>
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
      @yield('content')
</body>
</html>
