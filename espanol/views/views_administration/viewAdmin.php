<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=URL?>/css/administration/Users.css">
    <link rel="stylesheet" type="text/css" href="<?= URL?>/css/welcome/main.css">
    <script type="text/javascript" src="/scripts/autocompletion.js"></script>
    <title>Administración</title>

</head>

<body class="body">
<?php
require_once 'espanol/views/views_accueil/viewHeader.php';
?>

<section class="middle_page">
    <div>
        <!--<p>--><img class="img_admi" src="<?=URL?>/images/admi.jpg" alt="image administration"><!--<p>-->
    </div>

    <div class="autoecole">
        Administración
    </div>

    <div>
        <form  action="<?=URL?>administration/search" method="post" >

            <input type="text" name="search" placeholder="Encuentra un usuario" class="id_user" autocomplete="off" id="bar">
            <div id="search"></div>
            <input type="image" class="img_loupe" src="<?=URL?>/images/loupe.png" alt="submit">


        </form>

    </div>

    <div class="all_buttons">
        <btn class="btn btn_compte">
            <p class="centrer"><a class="centrer_compte" href="<?=URL?>es/administration/newaccount">Abrir una cuenta</a></p>
        </btn>
        <btn class="btn btn_cgu">
            <p class="centrer"><a class="centrer_compte" id="cgu_button" href="<?=URL?>es/administration/cgu">CGU de modificación</a></p>
        </btn>
        <btn class="btn btn_autoecole">
            <p class="centrer"><a class="centrer_compte" href="<?=URL?>es/administration/list-driving-school">Listado de autoescuelas</a></p>
        </btn>
        <btn class="btn btn_mentions_legales">
            <p class="centrer"><a class="centrer_compte" id="ml" href="<?=URL?>es/administration/mentions-legales">Modificación Aviso Legal</a></p>
        </btn>
    </div>

    <!--<div class="btn_modifier">
        <a class="modifier" href="<?=URL?>instructor/modify-drivingschool">Modifier l'auto-école</a>
    </div>-->
    <div class="btn_deconnexion">
        <a class="centrer" href="<?=URL?>es/administration/disconnect">Desconectarse</a>
    </div>
</section>

</body>
</html>
