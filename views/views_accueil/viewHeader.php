<header class="titlebar">
    <link rel="stylesheet" href="<?=URL?>/css/welcome/header.css">

    <div class="title_bar" id="title_bar" >
        <!--<p>--><img width="37px" length="37px" class="img logo_mus" src="<?=URL?>images/logo_musipsum.png" alt="logo"><!--</p>-->
        <!--<p class="title_txt" >Musipsum</p>-->
        <div class="nav_bar" >
            <a class="btn btn_header musipsum" href="<?=URL ?>">Musipsum</a>
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