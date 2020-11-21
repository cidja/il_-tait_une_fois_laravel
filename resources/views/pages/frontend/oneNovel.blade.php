@extends('layout.app')

@section('title', 'nom du roman')

@section('content')

<div class="img-novel">
  <img src="https://place-hold.it/300" alt="une image du net">
</div>
<section class="novel-information">
  <div class="rate">
    <span>note</span>
    <span>de 1 à 5</span>
  </div>
  <div class="title">
    <span>titre</span>
    <span>titre de l'ouvrage</span>
  </div>
  <div class="author">
    <span>Auteur</span>
    <span>auteur de l'ouvrage</span>
  </div>
  <div class="genre">
    <span>genre</span>
    <span>policier,etc...</span>
  </div>
  <div class="format">
    <span>format</span>
    <span>poche, broché ou kindle</span>
  </div>
  <div class="page-nb">
    <span>nombre de pages</span>
    <span>355</span>
  </div>
  <div class="time-to-read">
    <span>Livres lus en </span>
    <span>x jours</span>
  </div>
  <div class="begin-at">
    <span>Démarré le :</span>
    <span>date</span>
  </div>
  <div class="finish-at">
    <span>Fini le :</span>
    <span>date</span>
  </div>
  <div class="add-date">
    <span>Ajouté le :</span>
    <span>date</span>
  </div>
</section>

@endsection
