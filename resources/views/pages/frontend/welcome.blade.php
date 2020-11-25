@extends('layout.app')
<!--On hérite du template layout.app !-->

@section('title', 'Welcome')
<!--Je rentre le paramètre de la section title directement dans section !-->

@section('content')
<!--Dans cette partie ce sera la partie que j'ai mis en yield dans app.php !-->

  <!--Formulaire de recherche en haut de la page !-->
  <section>
    <form class="" action="search" method="get">
      <input type="text" name="search" placeholder="rentrez votre recherche"/>
      <input type="submit" name="submitSearch" value="valider" />
    </form>
  </section>

  <section>
    <h2>Affichage des 10 derniers romans</h2>
    <div class="container">
      @foreach($novels as $novel)
        <div class="title">
          titre de l'ouvrage : <span>{{ $novel->title }}</span>
        </div>
        <div class="author">
          Auteur : <span>{{  $novel->author }}</span>
        </div>
        <br/>


    @endforeach
    </div>
    {{ $novels->links() }}

  </section>


@endsection
