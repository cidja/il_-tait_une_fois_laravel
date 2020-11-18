<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset='config('app.charset')'>
    <title>
      @yield('title', config('app.name'))
    </title>
  </head>

    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php?action=home">
        <i class="fas fa-book-reader"></i>
        <span>Biblio Livres</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-uppercase">
                <li class="navbar-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Accueil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.php?action=allNovels">Livres</a>
                        <a class="dropdown-item" href="index.php?action=allCartoons">BD</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=listNovelCurrent">Livre en cours </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=allNovels">Tous les livres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=statistics">Statistiques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=readDateSort">Chronologie</a>
                </li>
                <li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=lastComments&amp;row_count=5">Derniers commentaires</a>
                    </li>
                </li>
                <?php
                if(isset($_SESSION["member"]) && $_SESSION["member"] == "admin"){
                    ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=addNovel">Ajout</a>
                </li>
                <?php };
                if(isset($_SESSION["member"]) && $_SESSION["member"] == "admin"){ //to see administration menu
                    ?>
                    <li class="navbar-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administration
                        </a><div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.php?action=moderation"><button class="btn btn-info">Moderation des commentaires</button></a>
                        <a class="dropdown-item" href="index.php?action=formNewPassword"><button class="btn btn-info">Modifier mot de passe</button></a>
                        <a class="dropdown-item" href="index.php?action=listComments"><button class="btn btn-primary">Liste commentaires</button></a>
                        <a class="dropdown-item" href="index.php?action=listMember"><button class="btn btn-primary">Liste des membres</button></a>
                        <a class="dropdown-item" href="index.php?action=sessionStop"><button class="btn btn-danger">Déconnexion</button></a>
                    </div>
                </li>
                <?php
                };
                if(isset($_SESSION["member"]) && ($_SESSION["member"] !== "admin")){ //member and admin mode
                    ?>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?action=formNewPassword"><button class="btn btn-info">Modifier mot de passe</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=sessionStop"><button class="btn btn-warning">Déconnexion</button></a>
                    </li>
                    <?php
                };
                if(!isset($_SESSION["member"])){ //for visit mode
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=connexionview"><button class="btn btn-warning">Connexion</button></a>
                    </li>
                <?php
                };
                if(isset($_SESSION["member"]) && $_SESSION["member"] == "admin"){ //admin mode
                    ?>
                    <li>
                        <div class="btn btn-primary text-uppercase mt-2">Mode administrateur</div>
                    </li>

                    <?php };
                if(!isset($_SESSION["member"])){ //message for visit mode
                    ?>
                    <li>
                        <div class="btn btn-primary text-uppercase mt-2">mode visiteur aucune modification possible</div>
                    </li>
                <?php };
                if(isset($_SESSION["member"]) && $_SESSION["member"] !== "admin"){ //message for member mode
                    ?>
                    <li>
                        <div class="btn btn-primary mt-2">mode membre commentaires sur les livres possible</div>
                    </li>
                    <?php
                };?>
            </ul>

        </div>
    </nav>
    </header>
    <body>
    @yield('content')
</body>
</html>
