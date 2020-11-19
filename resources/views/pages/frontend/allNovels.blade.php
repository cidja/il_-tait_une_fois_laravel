<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
    @section('title', 'tous les romans')
    </title>
  </head>
  <body>
    <div class="container" id="titleSort">
            <form action="index.php?action=genreSort" method="post">
                <div class="form-group row text-center align-items-center">
                <label for="genre" id="genreSortTitle" class="col-sm-2 col-form-label text-uppercase">tri par genre : </label>
                <div class="col-sm-8">
                    <select class="form-control" id="genre" name="genre">
                        <option>Auto biographie</option>
                        <option>Biographie</option>
                        <option>Classique</option>
                        <option>Developpement personnel</option>
                        <option>Essais</option>
                        <option>Fantastique</option>
                        <option>Policier</option>
                        <option>Roman</option>
                        <option>Science-fiction</option>
                        <option>Traité</option>
                        <option>Thriller</option>
                        <option>Vie quotidienne</option>
                    </select>
                </div>
                <div class="col-sm-2 mt-1">
                    <input type="submit" class="btn btn-primary text-uppercase" value="valider">
                </div>
                </div>
            </form>
        </div>
        <div class="container" id="sort"><button type="submit" id="sortAlphabetical">Tri par ordre alphabétique</button></div>
        <div class="nbNovels">
            <div class="d-flex justify-content-center text-white">
                <div class="fieldDescription">Nombre de livres dans la catégorie choisie :  </div>
                <div class="dataDescription">//= $countNovels; ?></div>
            </div>
        </div>

        <div class="container d-flex text-center flex-wrap justify-content-center">

            //php
        foreach($infos as $data) //source: https://www.php.net/manual/fr/control-structures.foreach.php
        {
            if(!empty($data["cover"])){
                $cover = $data["cover"];
            } else {
                $cover = "public/img/noCover.png";
            }
            ?>
                    <div class="coverAndStatus col-12 col-md-3 col-lg-3">
                        <a class="linkCover" href="index.php?action=oneNovel&amp;id=//= $data["id"];?>">
                            <img class="imgCover +"src=//=$cover; ?> alt="couverture du livre" title="couverture du livre" />


                            <div>
                                <div>//= $data["title"]; ?></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="dataDescription"> Format : </div>
                                <div class="fieldDescription ml-1"> //= $data["publication"];?></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="fieldDescription">
                                    //php
                                    $bDate = date_create($data["begin_date"]);
                                    $eDate = date_create($data["end_date"]);
                                    if($data["end_date"] == "0000-00-00"){ //to check if end date ok
                                    ?> <div id="notFinish" class="text-uppercase">pas fini</div>//php
                                    } else{
                                    $interval = date_diff($bDate, $eDate);
                                    ?>
                                    <div id="finish">
                                        //= $interval->format("Fini en %a jours");?>
                                    </div>
                                    //php
                                    }?>
                                </div>
                            </div>

                        <div class="mt-1">
                            //php
                        if($data["active"] == 1){
                                    ?>
                                        <button class="btn btn-warning">En cours</button>
                                    //php
                                }
                                else{
                                    ?>
                                        <button class="btn btn-success">Fini</button>
                                    //php
                                } ?>
                        </div>
                        </a>
                    </div>

            //php
        }
    ?>
    </div>
  </body>
</html>
