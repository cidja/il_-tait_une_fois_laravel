@extends('layout.app')
<!--On hérite du template layout.app !-->

@section('title', 'Liste complète')
<!--Je rentre le paramètre de la section title directement dans section !-->

@section('content')
<!--Dans cette partie ce sera la partie que j'ai mis en yield dans app.php !-->
    <div class="container">
        <h2>Liste complète des livres par ordre décroissant</h2>
        <table class="border-solid border-4">
            <th class='text-left'>Titre</th>
            <th class='text-left'>Auteur</th>
            @foreach($novels as $novel)
            <tr class="border-solid border-2">
                <td>
                    {{ $novel->title}}
                </td>
                <td>
                    {{ $novel->author}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection