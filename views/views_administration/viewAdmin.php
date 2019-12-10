<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=URL?>/css/admin/Users.css">

    <title>Administration</title>

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
        Administration
    </div>

    <div>
        <form  action="<?=URL?>administration/search" method="post" >

            <input type="text" name="search" placeholder="         Rechercher un utilisateur" class="id_user">
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
            <p class="centrer"><a class="centrer_capteur" href="<?=URL?>administration/list-driving-school">Auto-écoles</a></p>
        </btn>
    </div>
    <div class="btn_modifier">
        <a class="modifier" href="<?=URL?>instructor/modify-drivingschool">Modifier l'auto-école</a>
    </div>
    <div class="btn_deconnexion">
        <a class="centrer" href="<?=URL?>instructor/disconnect">Se déconnecter</a>
    </div>
</div>



</div>
</body>

</html>

