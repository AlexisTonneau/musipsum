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
                <div class="icones_langues">
                  <?php
                      if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on')
                      {
                        $domain="https";
                      }
                      else {
                        $domain="http";
                      }
                      $domain .="://";                      //     ajouter :// à l'URL
                      $domain .= $_SERVER['HTTP_HOST'];     //     Ajouter l'hôte à l'URL
                      $domain .= $_SERVER['REQUEST_URI'];      //     Ajouter l'emplacement de la ressource demandée à l'URL
                   echo($_POST['lang']);
                   ?>
                    <form class="langues" action="<?=$domain?>" method="post">
                          <input type="hidden" name="lang"  value="fr">
                          <input class="img_drapeau_france" type="image" src="<?=URL?>images/drapeau_france.png" alt="submit">
                     </form>
                    <form class="langues" action="<?=$domain?>" method="post">
                          <input type="hidden" name = "lang"  src="" alt="en" value="en">
                          <input class="img_drapeau_anglais" type="image" src="<?=URL?>images/drapeau_anglais.jpg" alt="submit"> 
                    </form>
                    <form class="langues" action="<?=$domain?>" method="post">
                          <input type="hidden" name="lang"  src="" alt="es" valeu="es">
                          <input class="img_drapeau_espagnol" type="image" src="<?=URL?>images/drapeau_espagnol.jpg" alt="submit">
                    </form>
                </div>
            </div>
            <div class="choix">
                <a class="txt_header" id="a_propos" href="<?=URL?>accueil/APropos" >About</a>
                <a class="txt_header" id="sucess_stories" href="<?=URL?>accueil/successstories" >Success Story</a>
                <a class="txt_header" id="nous_contacter" href="<?=URL?>accueil#contact">Contact us</a>
                <a class="txt_header" id="start_test" href="<?=URL?>test">Start </a>
                <a class="txt_header" id="connexion" href="<?=URL?>account"><?php
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

