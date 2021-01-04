@extends('layout.app')
<!--On hérite du template layout.app !-->
@section('title',"modification de $novel->title")
<!--Je rentre le paramètre de la section title directement dans section !-->

@section('content')
<!--Dans cette partie ce sera la partie que j'ai mis en yield dans app.php !-->
id = {{ $novel->id}}
  

@endsection