<?php
/**
 * Created by PhpStorm.
 * User: sumo stephane
 * Date: 17/01/2018
 * Time: 15:03
 */

?>

<?php 
require("connexionbdd.php");


if (!empty($_POST['email'])) {

    $pwd1 = htmlspecialchars($_POST['password']);
    $pwd2 = htmlspecialchars($_POST['confirm']);

    //$dbh->query('SELECT * from connexion1');
    if (($pwd1 == $pwd2)) {
//Etapes de stockage pour l'enrégistrement dans la bdd
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['email']);
//crypter le mdp
        $pwd1 = sha1(md5($pwd1));

//insertion dans la bdd, id est en auto-increment, dont on ne doit le remplir d'aucune donnée
        $dbh->query("INSERT INTO utilisateurs VALUES('','$pseudo','$mail','$pwd1')");
        header('Location: connexion.php');
    } else {
        echo '<h1 style="color: red">';
        echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
        echo '</h1>';
    }
}
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
                <li class=""><a href="index.php"><span style="">Accueil</span></a></li>
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
          <div class="container">

<div id="inscription">
  <div id="inscription1">  
    <h2 style="color: gold; text-shadow: 5px 5px 5px black">Register</h2>
    <form action="inscription.php" method="post">
        <input type="text" placeholder="pseudo" name="pseudo" style="margin-bottom: 10px; width: 200px"><br />
        <input type="text" placeholder="Adresse-email" name="email" style="margin-bottom: 10px; width: 200px"><br />
        <input type="password" placeholder="Mot de Passe" name="password" style="margin-bottom: 10px; width: 200px"><br />
        <input type="password" placeholder="Confirmez votre mot de passe" name="confirm" style="margin-bottom: 10px; width: 200px"><br />
        <button type="submit" id="button" value="submit" style="text-shadow: 5px 5px 5px black">Register</button>
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