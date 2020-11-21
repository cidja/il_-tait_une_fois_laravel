@extends('layout.app')

@section('title', "ajout d'un ouvrage")

@section('content')

<form class="" action="#" method="post">
  <div class="input-add">
    <label for="title">Titre de l'ouvrage</label>
    <input type="text" name="title" id="title">
  </div>
  <div class="input-add">
    <label for="author">Auteur de l'ouvrage</label>
    <input type="text" name="author" id="author">
  </div>
  <div class="input-add">
    <label for="genre">genre</label>
    <input type="text" name="genre" id="genre">
  </div>
  <div class="input-add">
    <label for="format">format</label>
    <select name="format" id="format">
      <option>Poche</option>
      <option>Broché</option>
      <option>Kindle</option>
    </select>
  </div>
  <div class="input-add">
    <label for="pages-count">nombre de pages</label>
    <input type="number" min="1" name="pages-count" id="pages-count">
  </div>
  <div class="input-add">
    <label for="cover">Couverture</label>
    <input type="text" name="cover" id="cover">
  </div>
  <input type="submit" name="add-submit" value="valider">
</form>

@endsection
