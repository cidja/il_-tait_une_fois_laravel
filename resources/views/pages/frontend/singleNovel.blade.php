@extends('layout.app')
<!--On hérite du template layout.app !-->

@section('title', 'un seul roman')
<!--Je rentre le paramètre de la section title directement dans section !-->

@section('content')
<!--Dans cette partie ce sera la partie que j'ai mis en yield dans app.php !-->

  <!--Formulaire de recherche en haut de la page !-->

    <h2>Affichage  du roman</h2>
  {{$novels->title}} <br />

  son auteur est : {{ $novels->author }}

  



@endsection
