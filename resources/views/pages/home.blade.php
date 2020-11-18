<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset='{{config('app.charset')}}'>
    <title>
      @section('title', 'Connexion')
    </title>
  </head>
  <body>
    <section>
      <div class=" text-center text-uppercase text-white">
          <h1 class="titleConnexion">Il était une fois...</h1>
          <h2 class="titleConnexion">l'application de gestion de bibliothèque</h2>
      </div>

      <section class="container text-center jumbotron connexion mt-5">
        <form method="post" action="index.php?action=checkMember">
            <h3>Accès:</h3>
            <div class="form-group">
                <label for="member">Pseudo :</label>
                <input type="text" class="form-control user" id="member" name="member" autofocus required>
            </div>
            <div class="form-group">
                <label for="pwd">Mot de passe : </label>
                <input type="password" class="form-control pwd" id="pwd" name="pwd" required >
            </div>
            <div class="form-group">
                <input class="submitButtonConnexion +" type="submit" value="Valider">
            </div>
        </form>

      <div class="row">
        <div class="col-sm-6">
            <button class="btn btn-warning buttonConnexionView"><a class="connexionViewLink bodyLink" href="index.php?action=inscription">Inscription</a></button>
        </div>
        <div class="col-sm-6">
            <button class="btn btn-success buttonConnexionView"><a class="connexionViewLink bodyLink" href="index.php?action=home">Visiteur</a></button>
        </div>
      </div>
      </section>
    </section>
  </body>
</html>
