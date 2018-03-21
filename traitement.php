<!-- Autre possible page de publication d'images -->
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
