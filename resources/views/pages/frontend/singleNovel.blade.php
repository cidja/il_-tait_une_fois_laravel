@extends('layout.app')
<!--On hérite du template layout.app !-->

@section('title', 'un seul roman')
<!--Je rentre le paramètre de la section title directement dans section !-->

@section('content')
<!--Dans cette partie ce sera la partie que j'ai mis en yield dans app.php !-->

  <!--Formulaire de recherche en haut de la page !-->

    <h2>Affichage  du roman</h2>
    <div class="id">
     id : {{ $novels->id  }}
    </div>
    <div class="container allnovel mb-4">
      <div class="cover w-40 mx-auto">
        <img src="{{ $novels->cover }}" alt="couverture du livre">
      </div>
      <div class="title flex flex-row justify-center">
        <div class="mr-4">titre de l'ouvrage :</div>
        <div>{{ $novels->title }}</div>
      </div>
      <div class="author flex flex-row justify-center">
        <div class="mr-4">Auteur : </div>
        <div>{{ $novels->author }} </div>
      </div>
      <div class="isbn flex flex-row justify-center">
        <div class="mr-4">isbn : </div>
        <div>{{ $novels->isbn }} </div>
      </div>
      <div class="genre flex flex-row justify-center">
        <div class="mr-4">genre : </div>
        <div>{{ $novels->genre }} </div>
      </div>
      <div class="creation_date flex flex-row justify-center">
        <div class="mr-4">ajouté le : </div>
        <div>{{ $novels->creation_date }} </div>
      </div>
      <div class="comment flex flex-row justify-center">
        <div class="mr-4">Commentaire : </div>
        <div>
        <?php
        if(!empty($novels->comment)){
          echo $novels->comment;
        }else{
          echo "pas de commentaire";
        } ?> </div>
      </div>








@endsection
