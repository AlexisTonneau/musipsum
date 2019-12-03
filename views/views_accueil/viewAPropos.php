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

<div class="premiere_ligne_body">
    <div class="bordure_souris_body">
        <div class="a_propos_image_souris" align="center">
            <img class="image_souris" src="<?=URL?>/images/souris.png" alt="Photo de souris"/>
            <p class="titre_texte_a_propos">Souris</p>
            <p>En savoir plus sur la consitution de la souris adaptée aux tests</p>
        </div>
    </div>
    <div class="bordure_stat_body" align="center">
        <div class="a_propos_image_stat">
            <img class="image_stat" src="<?=URL?>/images/stat.png" alt="Image de statistiques"/>
            <p class="titre_texte_a_propos">Statistiques</p>
            <p>En savoir plus sur les statistiques que j'ai obtenu lors de mes tests</p>
        </div>
    </div>
    <div class="bordure_profils_body" align="center">
        <div class="a_propos_image_profils">
            <img class="image_profil" src="<?=URL?>/images/profil.png" alt="Image d'un profil"/>
            <p class="titre_texte_a_propos">Profils</p>
            <p>Vous pouvez accéder à vos données sur votre profil</p>
        </div>
    </div>
</div>
<div class="deuxieme_ligne_body">
    <div class="bordure_voiture_body" align="center">
        <div class="a_propos_image_voiture">
            <img class="image_voiture" src="<?=URL?>/images/voiture.png" alt="Image d'une voiture"/>
            <p class="titre_texte_a_propos">Auto-école</p>
            <p>Je souhaite en savoir plus sur mon auto-école</p>
        </div>
    </div>
    <div class="bordure_permis_body" align="center">
        <div class="a_propos_image_permis">
            <img class="image_permis" src="<?=URL?>/images/permis.png" alt="Image d'un permis"/>
            <p class="titre_texte_a_propos">CGU</p>
            <p>Se renseigner sur les conditions générales d'utilisation</p>
        </div>
    </div>
    <div class="bordure_like_body" align="center">
        <div class="a_propos_image_like">
            <img class="image_like" src="<?=URL?>/images/like.png" alt="Image d'une souris"/>
            <p class="titre_texte_a_propos">Votre avis nous intéresse</p>
            <p>N'hésitez pas à laisser un avis sur les différents réseaux sociaux...</p>
        </div>
    </div>
</div>
</body>
</html>
<?php
//require_once ('viewFooter.php');
