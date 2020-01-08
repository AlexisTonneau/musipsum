<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=URL?>/css/admin/Users.css">

    <title>Mon compte</title>

</head>

<body class="body">
<?php
require_once 'english/views/views_accueil/viewHeader.php';
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

<<<<<<< HEAD:views/views_instructor/viewUsersAdmin.php
        <input type="text" name="search" placeholder="Rechercher un utilisateur" class="id_user">
=======
        <input type="text" name="search" placeholder="    search user" class="id_user">
>>>>>>>  Traduction anglais et espagnol:en/views/views_admin/viewUsersAdmin.php
        <input type="image" class="img_loupe" src="<?=URL?>/images/loupe.png" alt="submit">


        </form>

    </div>

    <div>
        <btn class="btn btn_compte">
<<<<<<< HEAD:views/views_instructor/viewUsersAdmin.php
            <p class="centrer"><a class="centrer_compte" href="<?=URL?>instructor/newaccount">Ouvrir un compte</a></p>
=======
            <p class="centrer"><a class="centrer_compte" href="<?=URL?>adminaccount/newaccount">Create an account</a></p>
>>>>>>>  Traduction anglais et espagnol:en/views/views_admin/viewUsersAdmin.php
        </btn>
    </div>
    <div>
        <btn class="btn btn_capteurs">
<<<<<<< HEAD:views/views_instructor/viewUsersAdmin.php
            <p class="centrer"><a class="centrer_capteur" href="<?=URL?>instructor/handlecaptor">Gérer</a></p>
        </btn>
    </div>
    <div class="btn_modifier">
        <a class="modifier" href="<?=URL?>instructor/modify-drivingschool">Modifier l'auto-école</a>
    </div>
    <div class="btn_deconnexion">
            <a id="bouton_deconnecter" class="modifier" href="<?=URL?>instructor/disconnect">Se déconnecter</a>
=======
            <p class="centrer"><a class="centrer_capteur" href="<?=URL?>adminaccount/handlecaptor">Manage</a></p>
        </btn>
    </div>
    <div class="btn_modifier">
        <a class="modifier" href="<?=URL?>adminaccount/modify-drivingschool">Modifie the driving school</a>
    </div>
    <div class="btn_deconnexion">
            <a class="centrer" href="<?=URL?>adminaccount/disconnect">Sign out</a>
>>>>>>>  Traduction anglais et espagnol:en/views/views_admin/viewUsersAdmin.php
    </div>
</div>



</div>
</body>
<?php
require_once ('views/views_accueil/viewFooter.php');
?>
</html>

