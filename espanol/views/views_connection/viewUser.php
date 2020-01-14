<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= URL ?>/css/capteurs/body.css">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>/css/welcome/header.css">
    <style type="text/css">
    </style>
    <title>Mon compte</title>
</head>
<body>
<?php
require_once 'espanol/views/views_accueil/viewHeader.php';
?>
<div class="body">


    <div class="centrer_page">

        <div class="id_utilisateur">
            <div class="titre_id">
                <p id="nom_prenom"><?php echo $account->getName().' '.$account->getFirstName();?></p>
            </div>
            <div class="txt_id">
                <div class="div_txt_id_1">
                    <p class="txt_id_spe">Correo electrónico :</p>
                    <p class="txt_id_php"><?php echo $account->getMailAddress();?></p>
                </div>
                <div class="div_txt_id_1">
                    <p class="txt_id_spe">Género: </p>
                    <p class="txt_id_php">AF</p>
                </div>
                <div class="div_txt_id_1">
                    <p class="txt_id_spe">Tamaño : </p>
                    <p class="txt_id_php"> <?php echo $account->getHeight();?></p>
                </div>
                <div class="div_txt_id_1">
                    <p class="txt_id_spe">Misa: </p>
                    <p class="txt_id_php"><?php echo $account->getWeight();?></p>
                </div>
                <div class="div_txt_id_1">
                    <p class="txt_id_spe">Nacido el : </p>
                    <p class="txt_id_php">10/10/2010</p>
                </div>
            </div>
        </div>
    </div>

    <div class="button1">

        <button class="bouton_resultat"  onclick="window.location.href = '<?=URL?>es/account/stat'">Ver mis resultados</button>
    </div>
    <div>
        <form method="post" action="<?=URL?>es/account/modify">

            <input type="hidden" name="modify" value="<?=$account->getId()?>">

            <input type="submit" name="disconnect" value="Editar mi perfil">

        </form>
    </div>
    <div>
        <form method="post" action="<?=URL?>es/account/disconnect">
            <input type="submit" name="disconnect" value="Cerrar sesión">
        </form>
    </div>


</body>
</html>