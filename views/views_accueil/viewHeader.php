<header class="titlebar">
   <div class="title_bar" id="title_bar">
       <img class="img logo_mus" src="<?=URL?>images/logo_musipsum_noir.png" alt="logo">
        <div class="nav_bar" >
            <div class="titre_header">
                <a id="titre_musipsum" href="welcome.html" style="/*margin-top:10%*/">MUSIPSUM</a>
                <div id="icones_header">
                    <img src="<?=URL?>images/icone_utilisateur_bis.png" class="icone_header">
                    <img src="<?=URL?>images/icone_lettre.png" class="icone_header">
                    <img src="<?=URL?>images/icone_loupe_bis.png" class="icone_header">
                </div>
            </div>
            <div class="choix">
                <a class="btn btn_header a_propos_header" href="<?=URL?>accueil/about" >À propos</a>
                <a class="btn btn_header sucess_stories" href="<?=URL?>accueil/successstories" >Success Story</a>
                <a class="btn btn_header nous_contacter" href="<?=URL?>accueil#contact">Nous contacter</a>
                <a class="btn btn_header start_test" href="<?=URL?>test">Démarrer </a>
                <a class="btn btn_header connexion" href="<?=URL?>account"><?php
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