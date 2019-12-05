<?php       //TODO Page où on va mettre les vidéos selon l'id du test (à chopper dans le token bdd)

/*
 * Le moins chiant sera certainement d'upload nos vidéos sur youtube si on veut pas se faire chier (sinon balise html <video>)
 * On choisira le lien (ou le fichier) selon l'id
 */

$url = TestManager::findVideo($_SESSION['url']);
require_once ('views/views_accueil/viewHeader.php');
?>

<iframe width="420" height="315"
        src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
