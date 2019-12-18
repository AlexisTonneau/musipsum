<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?=URL?>/css/propos/body.css">
</head>
<body class="body">
<?php
require_once 'viewHeader.php';
?>

<div id="premiere_ligne_body">
    <div id="bordure_souris_body">
        <div class="a_propos_image_souris" align="center">
            <img class="image_souris" src="<?=URL?>/images/souris.png" alt="Photo de souris"/>
            <p class="titre_texte_a_propos">Mouse</p>
            <p>Learn more about the consitutionof the mouse adapted to the test</p>
        </div>
    </div>
    <div id="bordure_stat_body" align="center">
        <div class="a_propos_image_stat">
            <img class="image_stat" src="<?=URL?>/images/stat.png" alt="Image de statistiques"/>
            <p class="titre_texte_a_propos">Statistics</p>
            <p>Learn more about statistics and my results</p>
        </div>
    </div>
    <div id="bordure_profils_body" align="center">
        <div class="a_propos_image_profils">
            <img class="image_profil" src="<?=URL?>/images/profil.png" alt="Image d'un profil"/>
            <p class="titre_texte_a_propos">Profils</p>
            <p>You can access to your results about your profil</p>
        </div>
    </div>
</div>
<div id="deuxieme_ligne_body">
    <div id="bordure_voiture_body" align="center">
        <div class="a_propos_image_voiture">
            <img class="image_voiture" src="<?=URL?>/images/voiture.png" alt="Image d'une voiture"/>
            <p class="titre_texte_a_propos">Driving School</p>
            <p>I want to know more about my driving school</p>
        </div>
    </div>
    <div id="bordure_permis_body" align="center">
        <div class="a_propos_image_permis">
            <img class="image_permis" src="<?=URL?>/images/permis.png" alt="Image d'un permis"/>
            <p class="titre_texte_a_propos">CGU</p>
            <p> Find out about the general conditions of use</p>
        </div>
    </div>
    <div id="bordure_like_body" align="center">
        <div class="a_propos_image_like">
            <img class="image_like" src="<?=URL?>/images/like.png" alt="Image d'une souris"/>
            <p class="titre_texte_a_propos">Your opinion interests us</p>
            <p> Feel free to leave an (good!) opinion on the different social network...</p>
        </div>
    </div>
</div><?php
require_once ('viewFooter.php');
?>
</body>
</html>

