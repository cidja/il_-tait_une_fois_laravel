<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset='{{config('app.charset')}}'>
    <title>
      @section('title')
    </title>
  </head>
  <body>
    <header>
      <ul>
        <li><a href="{{route('register')}}">Register</a></li>
        <li><a href="{{route('login')}}">Login</a></li>
      </ul>
    </header>

      <h1>Bienvenue sur le site il était une fois</h1>
      <p>Endroit parfait pour organiser sa bibliothèque de livre</p>
      <p>
        Un livre se termine <span class="text-color purple-400">mais ne s'oublie jamais</span>
      </p>
  </body>
</html>
