<header class="titlebar">
    <link type="text/css" rel="stylesheet" href="<?=URL?>css/welcome/header.css">
    <div class="title_bar" id="title_bar">
        <img class="img logo_mus" src="<?=URL?>images/logo_musipsum_noir.png" alt="logo">
        <div class="nav_bar" >
            <div class="titre_header">
                <a id="titre_musipsum" href="<?=URL?>">MUSIPSUM</a>
                <div id="icones_header">
                    <img src="<?=URL?>images/icone_utilisateur_bis.png" class="icone_header">
                    <img src="<?=URL?>images/icone_lettre.png" class="icone_header">
                    <img src="<?=URL?>images/icone_loupe_bis.png" class="icone_header">
                </div>
            </div>
            <div class="choix">
                <a class="txt_header" id="a_propos" href="<?=URL?>accueil/about" >À propos</a>
                <a class="txt_header" id="sucess_stories" href="<?=URL?>accueil/successstories" >Success Story</a>
                <a class="txt_header" id="nous_contacter" href="<?=URL?>accueil#contact">Nous contacter</a>
                <a class="txt_header" id="start_test" href="<?=URL?>test">Démarrer </a>
                <a class="txt_header" id="connexion" href="<?=URL?>account"><?php
                    if(isset($_SESSION['user']) && $_SESSION['user'] !== null){
                        echo 'Mon compte';
                    }
                    else{
                        echo 'Connexion';
                    }
                    ?></a>
            </div>
        </div>
    </div>

</header>

