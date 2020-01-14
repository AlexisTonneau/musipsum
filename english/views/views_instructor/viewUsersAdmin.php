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
        <form  action="<?=URL?>en/instructor/search" method="post" >

        <input type="text" name="search" placeholder="    search user" class="id_user">
        <input type="image" class="img_loupe" src="<?=URL?>/images/loupe.png" alt="submit">


        </form>

    </div>

    <div>
        <btn class="btn btn_compte">
            <p class="centrer"><a class="centrer_compte" href="<?=URL?>en/instructor/newaccount">Create an account</a></p>
        </btn>
    </div>
    <div>
        <btn class="btn btn_capteurs">
            <p class="centrer"><a class="centrer_capteur" href="<?=URL?>en/instructor/handlecaptor">Manage</a></p>
        </btn>
    </div>
    <div class="btn_modifier">
        <a class="modifier" href="<?=URL?>en/instructor/modify-drivingschool">Modify the driving school</a>
    </div>
    <div class="btn_deconnexion">
            <a class="centrer" href="<?=URL?>en/instructor/disconnect">Sign out</a>
    </div>
</div>



</div>
</body>
<?php
require_once ('english/views/views_accueil/viewFooter.php');
?>
</html>

