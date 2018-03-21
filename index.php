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
                <li class=""><a href="index.php"><span style="">Accueil</span></a></li>
                <li><a href="#"><span style="">Items</span></a></li>
                <li><a href="#"><span>Services</span></a></li>
                <li><a href="#"><span>FAQ</span></a></li>
                <li><a href="#" class="btn-primary btn btn-sm navbar-btn" style="margin: 0px; padding-right: 15px"><span><font style="vertical-align: inherit;">Panier </font></span></a></li>
            </ul>
        </div>
    </div>
    <div class="nav-bg dark"></div>
</nav>		<div id="wrap">
			<section id="gallery-fluid-carousel-3" class="pt-100 pb-75 text-center light">
    			<div class="container-fluid no-side-pad">
        			<h2 class="">Teams and Expertise</h2>
        			<div class="row">
            			<div class="col-md-12">
                			<div class="carousel-3item-dots-fluid-marg gallery owl-drag"><a href="https://i0.wp.com/saharatribune.com/wp-content/uploads/2016/10/Jecinta-Ngina.jpg" style="height: 300px" class="item gallery-box gallery-style-4">
                        			<span class="caption"><strong>Green Land</strong></span>
                        			<img src="https://i0.wp.com/saharatribune.com/wp-content/uploads/2016/10/Jecinta-Ngina.jpg" style="height: 300px" alt="screen">
                    			</a><a href="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F38663338%2F199438576477%2F1%2Foriginal.jpg?w=1000&rect=0%2C0%2C1006%2C503&s=98d8cc65db71f23976b1f4996f204abe" style="height: 300px" class="item gallery-box gallery-style-4 mfp-iframe">
                        			<span class="caption"><strong>Natural</strong></span>
                        			<img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F38663338%2F199438576477%2F1%2Foriginal.jpg?w=1000&rect=0%2C0%2C1006%2C503&s=98d8cc65db71f23976b1f4996f204abe" style="height: 300px" alt="screen">
                    			</a><a href="https://qzprod.files.wordpress.com/2018/01/india-farming1.jpg?quality=80&strip=all&w=1600" style="height: 300px" target="_blank" class="item gallery-box gallery-style-4 external">
                        			<span class="caption"><strong>Expertise</strong></span>
                        			<img src="https://qzprod.files.wordpress.com/2018/01/india-farming1.jpg?quality=80&strip=all&w=1600" style="height: 300px" alt="screen">
                    			</a><a href="https://www.hindustantimes.com/rf/image_size_960x540/HT/p2/2017/06/19/Pictures/assignment-name-in-brief_01a8c730-54da-11e7-9dcc-cc63e7fed987.JPG" style="height: 300px" class="item gallery-box gallery-style-4">
                        			<span class="caption"><strong>Look Out</strong></span>
                        			<img src="https://www.hindustantimes.com/rf/image_size_960x540/HT/p2/2017/06/19/Pictures/assignment-name-in-brief_01a8c730-54da-11e7-9dcc-cc63e7fed987.JPG" style="height: 300px" alt="screen">
                    			</a><a href="https://www.euractiv.fr/wp-content/uploads/sites/3/2016/10/Digital-farming.jpg" style="height: 300px" class="item gallery-box gallery-style-4">
                        			<span class="caption"><strong>Teams</strong></span>
                        			<img src="https://www.euractiv.fr/wp-content/uploads/sites/3/2016/10/Digital-farming.jpg" style="height: 300px" alt="screen">
                    			</a><a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAccsVdDJxnPCLrMmOds_f5U30kYJHRY9BMaeWzfdWc4znRRVZ" style="height: 300px" class="item gallery-box gallery-style-4">
                        			<span class="caption"><strong>Materials</strong></span>
                        			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAccsVdDJxnPCLrMmOds_f5U30kYJHRY9BMaeWzfdWc4znRRVZ" style="height: 300px" alt="screen">
                    			</a><a href="https://dailypost.in/wp-content/uploads/2017/12/pg3-1.jpg" style="height: 300px" class="item gallery-box gallery-style-4">
                        			<span class="caption"><strong>Agriculture</strong></span>
                        			<img src="https://dailypost.in/wp-content/uploads/2017/12/pg3-1.jpg" style="height: 300px" alt="screen">
                    			</a><a href="http://pt.nec.com/pt_PT/images/NEC_tomate_em_Portugal.jpg" style="height: 300px" class="item gallery-box gallery-style-4">
                        			<span class="caption"><strong>New Ideas</strong></span>
                        			<img src="http://pt.nec.com/pt_PT/images/NEC_tomate_em_Portugal.jpg" style="height: 300px" alt="screen">
                    			</a></div>
            			</div>
        			</div>
    			</div>
    			<div class="bg"></div>

            <section id="gallery-fluid-carousel-3" class="pt-100 pb-75 text-center light">
                <div class="container-fluid no-side-pad">
                    <h2 class="">Material Collections</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel-3item-dots-fluid-marg gallery owl-drag"><a href="http://www.gantesequipagri.fr/wp-content/uploads/2015/01/CULTIVSOLpng.png" class="item gallery-box gallery-style-4">
                                    <span class="caption"><strong>T-Shirt White Curve Neck</strong></span>
                                    <img src="http://www.gantesequipagri.fr/wp-content/uploads/2015/01/CULTIVSOLpng.png" style="height: 300px" alt="screen">
                                </a><a href="http://senagriculture.com/wp-content/uploads/2016/08/e14-320x220.jpg" class="item gallery-box gallery-style-4 mfp-iframe">
                                    <span class="caption"><strong>Eco Bag</strong></span>
                                    <img src="http://senagriculture.com/wp-content/uploads/2016/08/e14-320x220.jpg" alt="screen">
                                </a><a href="http://www.landtechnik-online.com/images/ltz-goerzig-new-holland-mais.jpg" target="_blank" class="item gallery-box gallery-style-4 external">
                                    <span class="caption"><strong>Sweetshirt</strong></span>
                                    <img src="http://www.landtechnik-online.com/images/ltz-goerzig-new-holland-mais.jpg" style="height: 300px" alt="screen">
                                </a><a href="https://charleschapuis.fr/var/charleschapuis/storage/images/dealers-content/fr/charleschapuis/media/galeries-d-images/materiels-agricole-john-deere/1373493-1-fre-FR/Materiels-Agricole-John-Deere.jpg" class="item gallery-box gallery-style-4">
                                    <span class="caption"><strong>T-Shirt White Curve Neck</strong></span>
                                    <img src="https://charleschapuis.fr/var/charleschapuis/storage/images/dealers-content/fr/charleschapuis/media/galeries-d-images/materiels-agricole-john-deere/1373493-1-fre-FR/Materiels-Agricole-John-Deere.jpg" style="height: 300px" alt="screen">
                                </a><a href="http://www.gantesequipagri.fr/wp-content/uploads/2015/01/CULTIVSOLpng.png" class="item gallery-box gallery-style-4">
                                    <span class="caption"><strong>Teams</strong></span>
                                    <img src="http://www.gantesequipagri.fr/wp-content/uploads/2015/01/CULTIVSOLpng.png" style="height: 300px" alt="screen">
                                </a><a href="http://senagriculture.com/wp-content/uploads/2016/08/e14-320x220.jpg" class="item gallery-box gallery-style-4">
                                    <span class="caption"><strong>Materials</strong></span>
                                    <img src="http://senagriculture.com/wp-content/uploads/2016/08/e14-320x220.jpg" style="height: 300px" alt="screen">
                                </a><a href="http://www.landtechnik-online.com/images/ltz-goerzig-new-holland-mais.jpg" class="item gallery-box gallery-style-4">
                                    <span class="caption"><strong>Agriculture</strong></span>
                                    <img src="http://www.landtechnik-online.com/images/ltz-goerzig-new-holland-mais.jpg" style="height: 300px" alt="screen">
                                </a><a href="https://charleschapuis.fr/var/charleschapuis/storage/images/dealers-content/fr/charleschapuis/media/galeries-d-images/materiels-agricole-john-deere/1373493-1-fre-FR/Materiels-Agricole-John-Deere.jpg" class="item gallery-box gallery-style-4">
                                    <span class="caption"><strong>New Ideas</strong></span>
                                    <img src="https://charleschapuis.fr/var/charleschapuis/storage/images/dealers-content/fr/charleschapuis/media/galeries-d-images/materiels-agricole-john-deere/1373493-1-fre-FR/Materiels-Agricole-John-Deere.jpg" style="height: 300px" alt="screen">
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="bg"></div>

			</section><section id="gallery-list-2col-2--0" class="pt-125 pb-125 light">
    			<div class="container">
        			<h2 class="mb-25"><strong>Table List</strong></h2>
        			<h3 class="mb-75">Slick styles to see you through to spring</h3>
        			<div class="row gallery">
            			<div class="col-md-6">
                                <span class="mb-20 icons-row">
                                    <i class="icon-star-fill icon-size-m icon-color"></i><i class="icon-star-fill icon-size-m icon-color"></i><i class="icon-star-fill icon-size-m icon-color"></i><i class="icon-star-fill icon-size-m icon-color"></i><i class="icon-star-fill icon-size-m icon-color"></i>
                                </span>

                			<a href="https://charleschapuis.fr/var/charleschapuis/storage/images/dealers-content/fr/charleschapuis/media/galeries-d-images/materiels-agricole-john-deere/1373493-1-fre-FR/Materiels-Agricole-John-Deere.jpg" class="gallery-box gallery-style-2">
                    			<i class="icon icon-size-m icon-plus"></i>
                
                    			<span class="desc" style="background-color: white; color: red"><strong>$19.99</strong></span>
                    			<img src="https://charleschapuis.fr/var/charleschapuis/storage/images/dealers-content/fr/charleschapuis/media/galeries-d-images/materiels-agricole-john-deere/1373493-1-fre-FR/Materiels-Agricole-John-Deere.jpg" style="height: 300px" alt="screen">
                			</a>

                                <span class="mb-20 icons-row">
                                    <i class="icon-star-fill icon-size-m icon-color"></i><i class="icon-star-fill icon-size-m icon-color"></i><i class="icon-star-fill icon-size-m icon-color"></i><i class="icon-star-fill icon-size-m icon-color"></i>
                                </span>        
                			<a href="http://www.hortitecnews.com/wp-content/uploads/2014/10/field_image_materiels-agricoles-maroc-2014-09-26.jpg" class="gallery-box gallery-style-2">
                    			<i class="icon icon-size-m icon-plus"></i>
                    		
                    			<span class="desc" style="background-color: white; color: red"><strong><del>$20.00</del> $9.99</strong></span>
                    			<img src="http://www.hortitecnews.com/wp-content/uploads/2014/10/field_image_materiels-agricoles-maroc-2014-09-26.jpg" style="height: 300px" alt="screen">
                			</a>
            			</div>
            			<div class="col-md-6">

                                <span class="mb-20 icons-row">
                                    <i class="icon-star-fill icon-size-m icon-color"></i><i class="icon-star-fill icon-size-m icon-color"></i><i class="icon-star-fill icon-size-m icon-color"></i>
                                </span>

                			<a href="http://www.perreux-motoculture.fr/img/contenu/materiel-agricole-4.png" class="gallery-box gallery-style-2">
                    			<i class="icon icon-size-m icon-plus"></i>
                    			<span class="desc" style="background-color: white; color: red"><strong><del>$25.00</del> $14.99</strong></span>
                    			<img src="http://www.perreux-motoculture.fr/img/contenu/materiel-agricole-4.png" style="height: 300px" alt="screen">
                			</a>

                                <span class="mb-20 icons-row">
                                    <i class="icon-star-fill icon-size-m icon-color"></i>
                                </span>

                			<a href="https://etsdeschamps.concession-jd.com/extension/mdws/design/mdws3/images/liquid/industries/AG.jpg" class="gallery-box gallery-style-2">
                    			<i class="icon icon-size-m icon-plus"></i>
                    			
                    			<span class="desc" style="background-color: white;color: red"><strong>$24.99</strong></span>
                    			<img src="https://etsdeschamps.concession-jd.com/extension/mdws/design/mdws3/images/liquid/industries/AG.jpg" style="height: 300px" alt="screen">
                			</a>
                                                            <p>Simple and flexibel products, universally recognised by the best customers.</p>
                                <div class="card-author">
                                <img src="images/photo-small-3.png" srcset="images/photo-small-3@2x.png 2x" alt="Photo">
                                    <small>Expert</small>
                                </div>
            			</div>
        			</div>
                                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <ul class="share-list mt-50">
                                <li>
                                    <a href="#" class="goodshare" data-type="fb"><i class="icon-facebook"></i><span>Share</span><span data-counter="fb"></span></a>
                                </li>
                                <li>
                                    <a href="#" class="goodshare" data-type="tw"><i class="icon-twitter"></i><span>Tweet</span><span data-counter="tw"></span></a>
                                </li>
                                <li>
                                    <a href="#" class="goodshare" data-type="gp"><i class="icon-google-plus"></i><span>Share</span><span data-counter="gp"></span></a>
                                </li>
                                <li>
                                    <a href="#" class="goodshare" data-type="li"><i class="icon-linkedin"></i><span>Share</span><span data-counter="li"></span></a>
                                </li>
                                <li>
                                    <a href="#" class="goodshare" data-type="pt"><i class="icon-pinterest-p"></i><span>Share</span><span data-counter="pt"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">

                            </div>
                            
                        </div>
                    </div>
                </div>
 
    			</div>
    			<div class="bg"></div>
			</section>

			<div style="margin-bottom: 20px">
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

				
			</div>

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