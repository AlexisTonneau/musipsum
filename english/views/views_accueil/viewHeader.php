<?php
$about = "#FFC0CB";
$url = $_SESSION['url'];

$successstories = "#FFC0CB";
$connexion = "#FFC0CB";
$test = "#FFC0CB";

if ($url[0]==='test'){
    $test = "#ff4d6a";
    $about = "#FFC0CB";
    $successstories = "#FFC0CB";
    $connexion = "#FFC0CB";
}
else if ($url[0]==='account'||$url[0]==='instructor'){
    $connexion = "#ff4d6a";
    $about = "#FFC0CB";
    $successstories = "#FFC0CB";
    $test = "#FFC0CB";

}

else if($url[0]==='accueil'){
    switch ($url[1]) {
        case 'about':
            $about = "#FF4D6A";
            break;
        case 'successstories':
            $successstories = "#ff4d6a";
            break;

    }
    //$about = "#FF4D6A";

}

?>
<head>
    <title>Musipsum</title>
    <style>

        #start_test{
color: <?=$test?>;
        }
        #a_propos{
color: <?=$about?>;
        }
        #connexion{
color: <?=$connexion?>;
        }
        #sucess_stories{
color: <?=$successstories?>;
        }
        #nous_contacter{
            color: #FFC0CB
        }


    </style>
</head>

<header class="titlebar">

    <link type="text/css" rel="stylesheet" href="<?=URL?>css/welcome/header.css">
    <div class="title_bar" id="title_bar">
        <a  href="<?=URL?>en"> <img src="<?=URL?>images/logo_musipsum_noir.png" alt="logo" class="img logo_mus"></a>
        <div class="nav_bar" >
            <div class="titre_header">
                <a id="titre_musipsum" href="<?=URL?>en">MUSIPSUM</a>
                <div id="icones_header">
                    <a href="<?=URL?>en/account"><img src="<?=URL?>images/icone_utilisateur_bis.png" class="icone_header"></a>
                    <a href="<?=URL?>en/accueil#contact"><img src="<?=URL?>images/icone_lettre.png" class="icone_header"></a>
                    <div class="dropdown">
                        <button class="dropbtn"><img src="<?= URL ?>images/<?= $_GET['lang'] ?>-flag.jpg"
                                                     alt="Current language" id="current_language">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <form class="langues" action="<?= URL ?>fr" method="post">
                                <input type="hidden" name="lang" value="fr">

                                <input class="img_drapeau_1" type="image" src="<?= URL ?>images/fr-flag.jpg"
                                       alt="submit">

                            </form>
                            <form class="langues" action="<?= URL ?>es" method="post">
                                <input type="hidden" name="lang" src="" alt="es" value="es">
                                <input class="img_drapeau_2" type="image" src="<?= URL ?>images/es-flag.jpg"
                                       alt="submit">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="choix">
                <a class="txt_header" id="a_propos" href="<?=URL?>en/accueil/about" >About</a>
                <a class="txt_header" id="sucess_stories" href="<?=URL?>en/accueil/successstories" >Success Story</a>
                <a class="txt_header" id="nous_contacter" href="<?=URL?>en/accueil#contact">Contact us</a>
                <a class="txt_header" id="start_test" href="<?=URL?>en/test">Start </a>
                <a class="txt_header" id="connexion" href="<?=URL?>en/account"><?php
                    if(isset($_SESSION['user']) && $_SESSION['user'] !== null){
                        echo 'My account';
                    }
                    else{
                        echo 'Connexion';
                    }
                    ?></a>
                    
        

            </div>
        </div>
    </div>

</header>

