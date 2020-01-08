<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=URL?>/css/admin/Users.css">

    <title>Mi cuenta</title>

</head>

<body class="body">
<?php
require_once 'espanol/views/views_accueil/viewHeader.php';
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
        <form  action="<?=URL?>adminaccount/search" method="post" >

        <input type="text" name="search" placeholder="    Encuentra un usuario" class="id_user">
        <input type="image" class="img_loupe" src="<?=URL?>/images/loupe.png" alt="submit">


        </form>

    </div>

    <div>
        <btn class="btn btn_compte">
            <p class="centrer"><a class="centrer_compte" href="<?=URL?>adminaccount/newaccount">Abrir una cuenta</a></p>
        </btn>
    </div>
    <div>
        <btn class="btn btn_capteurs">
            <p class="centrer"><a class="centrer_capteur" href="<?=URL?>adminaccount/handlecaptor">Gestionar</a></p>
        </btn>
    </div>
    <div class="btn_modifier">
        <a class="modifier" href="<?=URL?>adminaccount/modify-drivingschool">Editar autoescuela</a>
    </div>
    <div class="btn_deconnexion">
            <a class="centrer" href="<?=URL?>adminaccount/disconnect">Desconectarse</a>
    </div>
</div>



</div>
</body>

</html>

