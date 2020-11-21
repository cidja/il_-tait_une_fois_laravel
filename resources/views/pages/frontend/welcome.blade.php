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
    <div class="">
      1
    </div>
    <div class="">
      2
    </div>
    <div class="">
      3
    </div>
    <div class="">
      4
    </div>
    <div class="">
      5
    </div>
    <div class="">
      6
    </div>
    <div class="">
      7
    </div>
    <div class="">
      8
    </div>
    <div class="">
      9
    </div>
    <div class="">
      10
    </div>
    <div class="pagination">
        <p>Pagination</p>
    </div>
  </section>


@endsection
