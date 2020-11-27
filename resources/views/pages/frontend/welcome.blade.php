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
    <div class="container mx-auto">
      @foreach($novels as $novel)
        <div class="container allnovel mb-4">
          <div class="cover w-40 mx-auto">
            <img src="{{ $novel->cover }}" alt="couverture du livre">
          </div>
          <div class="title flex flex-row justify-center">
            <div class="mr-4">titre de l'ouvrage :</div>
            <div>{{ $novel->title }}</div>
          </div>
          <div class="author flex flex-row justify-center">
            <div class="mr-4">Auteur : </div>
            <div>{{ $novel->author }} </div>
          </div>
          <a href="{{URL::to('pages.frontend.singleNovel')}}">en savoir plus</a>

        </div>
@endforeach
    </div>
    {{ $novels->links() }}

  </section>


@endsection
