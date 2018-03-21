<!-- Traitement de d'articles(description, titre,...) -->

<?php
require "connexionbdd.php";

?>


</body>
</html>


<?php 

require('connexionbdd.php'); 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>index</title>
    
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
    <script src="js/fonts.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/icons.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/index.css" />
  </head>
    <body class="light-page">
<nav id="nav-logo-2row-2" class="navbar dark">
    <div class="container">
        <div class="clearfix">   
            <ul class="text-icon-list list-inline navbar-text pull-left" style="">
                    <li><i class="icon-map-marker icon-color"></i><span style="">12 Rue Anatole France</span></li>
                    <li><i class="icon-phone-incoming icon-color"></i><span>+(336)62892433</span></li>
                    <!-- <li><i class="icon-clock icon-color"></i><span>9:00 - 18:00</span></li> -->
                </ul>
            <div class="btn-group pull-right hidden-xs">
                <?php if(isset($_SESSION['user-connecté'])){
                    ?><a href="deconnexion.php" class="btn btn-sm btn-default"><span style="">Deconnexion</span></a>
                <?php } else { ?>
                    <a href="connexion.php" class="btn btn-sm btn-default"><span style="">Connexion</span></a>
                <?php } ?>

                <?php if(isset($_SESSION['user-connecté'])) { } else { ?> <a href="inscription.php" class="btn btn-sm btn-primary"><span style="">Inscription</span></a> <?php } ?>
                <span><a href="publier.php">Publier</a></span>
                <span><a href="user.php">Profil</a></span>
            </div>
        </div>
        <hr class="mt-0 mb-0" style="opacity: 0.5">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <div class="navbar-brand"></div>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" style="">
                <li class=""><a href="index.php"><span style="">Home</span></a></li>
                <li><a href="#"><span style="">Items</span></a></li>
                <li><a href="#"><span>Services</span></a></li>
                <li><a href="#"><span>FAQ</span></a></li>
                <li><a href="#" class="btn-primary btn btn-sm navbar-btn" style="margin: 0px; padding-right: 15px"><span><font style="vertical-align: inherit;">Panier </font></span></a></li>
            </ul>
        </div>
    </div>
    <div class="nav-bg dark"></div>
</nav>    <div id="wrap">
      <section id="gallery-fluid-carousel-3" class="pt-100 pb-75 text-center light">
          <div class="container-fluid no-side-pad">
                </div>
                <div class="bg"></div>

      </section><section id="gallery-list-2col-2--0" class="pt-125 pb-125 light">
          <div class="container" style="margin-left: 260px">
           <div class="col-md-6">
            <h2>Publier un article</h1>
            <?php
//Poster un commentaire
if(isset($_POST['content']) and isset($_POST['titre']))
{
    $req = $dbh->prepare('INSERT INTO articles VALUES (?,?,?,?)');
    $req->execute(array("",$_POST['titre'],$_POST['content'],$_SESSION['user-connecté']));
    //--$req->execute(array($_POST['content'],$_SESSION['utilisateur-connecté']));
    echo $_POST['content'];

    //header("Location: index.php");
}

?>


<form method=post id="main">
    <input type="text" name="titre" placeholder="Votre titre..." maxlenght="280" style="margin-bottom: 5px"><br />
    <textarea rows="5" cols="50" type="text" name="content" placeholder="Description..." style="margin-bottom: 5px"></textarea><br />
    <button class="twitter button" type="submit">Tweeter</button><br />
<?php

$req = $dbh->query("SELECT * FROM articles");
$tweets = $req->fetchAll();

foreach($tweets as $tweet){
    echo $tweet['texte'] ."<br>";
}
?>

</form>
</div>
<!-- Traitement d'images -->
<div class="col-md-6">
<form enctype="multipart/form-data" action="index.php" method="post">
    <input type="file" name="image" >
    <input type="submit" >
<?php

if(isset($_FILES['image'])){
    echo "<pre>";
    echo var_dump($_FILES);
    echo "</pre>";
    // On récupère des informations du fichier
    $nom_fichier = $_FILES['image']['name'];
    $chemin_temporaire = $_FILES['image']['tmp_name'];

    // On définit le nouveau chemin avec le repertoire images suivi du lien du fichier(exemple: identifiants.txt)
    $nouveau_chemin = 'images/' . $nom_fichier;

    // On déplace le fichier dans le dossier images
    move_uploaded_file($chemin_temporaire, $nouveau_chemin);

    // On affiche l'image
    echo '<img src="' . $nouveau_chemin .  '">';
}

?>



</form>
</div>
              </div>
          <div class="bg"></div>
      </section>
              
            <section id="clients-4col-3row-text" class="pt-125 pb-150 dark">
                <div class="container">
                    <div class="row flex-md-vmiddle">
                        <div class="col-md-2">
                            <img class="screen mb-50" src="images/client-1-dark.png" srcset="images/client-1-dark@2x.png 2x" alt="Client">

                            <img class="screen mb-50" src="images/client-2-dark.png" srcset="images/client-2-dark@2x.png 2x" alt="Client">

                            <img class="screen" src="images/client-3-dark.png" srcset="images/client-3-dark@2x.png 2x" alt="Client">

                        </div>
                        <div class="col-md-2 text-center">

                            <img class="screen mb-50" src="images/client-4-dark.png" srcset="images/client-4-dark@2x.png 2x" alt="Client">

                            <img class="screen mb-50" src="images/client-5-dark.png" srcset="images/client-5-dark@2x.png 2x" alt="Client">

                            <img class="screen" src="images/client-6-dark.png" srcset="images/client-6-dark@2x.png 2x" alt="Client">

                        </div>
                        <div class="col-md-2 text-center">

                            <img class="screen mb-50" src="images/client-7-dark.png" srcset="images/client-7-dark@2x.png 2x" alt="Client">

                            <img class="screen mb-50" src="images/client-8-dark.png" srcset="images/client-8-dark@2x.png 2x" alt="Client">

                            <img class="screen" src="images/client-9-dark.png" srcset="images/client-9-dark@2x.png 2x" alt="Client">

                        </div>
                        <div class="col-md-2 text-center">

                            <img class="screen mb-50" src="images/client-6-dark.png" srcset="images/client-6-dark@2x.png 2x" alt="Client">

                            <img class="screen mb-50" src="images/client-1-dark.png" srcset="images/client-1-dark@2x.png 2x" alt="Client">

                            <img class="screenmb-50" src="images/client-4-dark.png" srcset="images/client-4-dark@2x.png 2x" alt="Client">

                        </div>
                        <div class="col-md-4">
                            <div class="border-box padding-box">
                                <h3 class="mb-30">Our Clients</h3>
                                <p>In our work we try to use only the most modern, convenient and interesting solutions. We want the template you downloaded look unique and new for such a long time as it is possible</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="bg"></div>
            </section>
    </div>
    <footer></footer>
    <div class="modal-container"></div>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/aos.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCByts0vn5uAYat3aXEeK0yWL7txqfSMX8"></script>
    <script src="https://cdn.jsdelivr.net/jquery.goodshare.js/3.2.8/goodshare.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>

