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
else if ($url[0]==='account'||$url[0]==='adminaccount'){
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
        <a  href="<?=URL?>"> <img src="<?=URL?>images/logo_musipsum_noir.png" alt="logo" class="img logo_mus"></a>
        <div class="nav_bar" >
            <div class="titre_header">
                <a id="titre_musipsum" href="<?=URL?>">MUSIPSUM</a>
                <div id="icones_header">
                    <a href="<?=URL?>account"><img src="<?=URL?>images/icone_utilisateur_bis.png" class="icone_header"></a>
                    <a href="<?=URL?>accueil#contact"><img src="<?=URL?>images/icone_lettre.png" class="icone_header"></a>
                    <a href="<?=URL?>"><img src="<?=URL?>images/icone_loupe_bis.png" class="icone_header"></a>
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

