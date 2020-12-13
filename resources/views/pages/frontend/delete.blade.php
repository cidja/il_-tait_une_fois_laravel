@extends('layout.app')
<!--On hérite du template layout.app !-->

@section('title', 'effacer un roman')
<!--Je rentre le paramètre de la section title directement dans section !-->

@section('content')
<!--Dans cette partie ce sera la partie que j'ai mis en yield dans app.php !-->

  <!--Formulaire de recherche en haut de la page !-->
<div class="container allnovel mb-4">
    <h2>
      Suppression du roman : {{ $novel->title }}
    </h2>
    <form action="#" method="post">
      <label for="password">Mot de passe pour confirmer la suppression : </label>
      <input type="password" name="password" id="password">
      <input type="submit" value="valider">
    </form>

      </div>

@endsection