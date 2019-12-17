<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=URL?>/css/admin/Users.css">

    <title>Mon compte</title>

</head>

<body class="body">
<?php
require_once 'views/views_accueil/viewHeader.php';
?>

<div class="middle_page">
    <div>
        <!--<p>--><img class="img_portrait" src="<?=URL?>/images/utilisateur.png" alt="portrait"><!--<p>-->
    </div>

    <div class="autoecole">
          <?php
            echo DrivingSchoolManager::getCurrentDrivingSchool()->getName();
          ?>
    </div>

    <div>
        <form  action="<?=URL?>instructor/search" method="post" >

        <input type="text" name="search" placeholder="Rechercher un utilisateur" class="id_user">
        <input type="image" class="img_loupe" src="<?=URL?>/images/loupe.png" alt="submit">


        </form>

    </div>

    <div>
        <btn class="btn btn_compte">
            <p class="centrer"><a class="centrer_compte" href="<?=URL?>instructor/newaccount">Ouvrir un compte</a></p>
        </btn>
    </div>
    <div>
        <btn class="btn btn_capteurs">
            <p class="centrer"><a class="centrer_capteur" href="<?=URL?>instructor/handlecaptor">Gérer</a></p>
        </btn>
    </div>
    <div class="btn_modifier">
        <a class="modifier" href="<?=URL?>instructor/modify-drivingschool">Modifier l'auto-école</a>
    </div>
    <div class="btn_deconnexion">
            <a id="bouton_deconnecter" class="modifier" href="<?=URL?>instructor/disconnect">Se déconnecter</a>
    </div>
</div>



</div>
</body>

</html>

