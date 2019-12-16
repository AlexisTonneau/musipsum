<?php       //TODO Page où on va mettre les vidéos selon l'id du test (à chopper dans le token bdd)

/*
 * Le moins chiant sera certainement d'upload nos vidéos sur youtube si on veut pas se faire chier (sinon balise html <video> mais pas compatible partout)
 * On choisira le lien (ou le fichier) selon l'id
 */


require_once ('views/views_accueil/viewHeader.php');
?>

<iframe style="margin-top: 2%;margin-left: 10%" width="1009" height="568" src="<?=$url_video?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
