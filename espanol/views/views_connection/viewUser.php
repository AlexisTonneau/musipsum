
<?php       //TODO Add info about driving schools



?>


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
require_once 'views/views_accueil/viewHeader.php';
?>
<div class="body">
    <div class="id_utilisateur">
        <div class="titre_id">
            <img src="<?=URL?>images/icone_utilisateur.png" id="icone_utilisateur">
            <p id="nom_prenom"><?php echo $account->getName().' '.$account->getFirstName();?></p>
        </div>
        <div class="txt_id">
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Adresse mail : </p>
            </div>
            <div class="div_txt_id_2">
                <p class="txt_id_php"><?php echo $account->getMailAddress();?></p>
            </div>
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Genre :</p>
            </div>
            <div class="div_txt_id_2">
                <p class="txt_id_php">AF</p>
            </div>
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Taille :</p>
            </div>
            <div class="div_txt_id_2">
                <p class="txt_id_php"><?php echo $account->getHeight();?></p>
            </div>
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Masse :</p>
            </div>
            <div class="div_txt_id_2">
                <p class="txt_id_php"><?php echo $account->getWeight();?></p>
            </div>
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Né le :</p>
            </div>
            <div class="div_txt_id_2">
                <p class="txt_id_php">10/10/2010</p>
            </div>
        </div>
    </div>
</div>
<div class="stats_utilisateur">
    <img src="<?=URL?>images/test_1.png" class="img_test">
    <img src="<?=URL?>images/test_2.jpg" class="img_test">
</div>

<div>
    <form method="post" action="<?=URL?>es/account/disconnect">
        <input type="submit" name="disconnect" value="Se déconnecter">
    </form>
</div>
<div>
    <form method="post" action="<?=URL?>es/account/modify">
        <input type="hidden" name="modify" value="<?=$account->getId()?>">
        <button type="submit" class="button-submit" id="modify" name="submit_param" value="<?=$account->getId()?>">
            Modifier
        </button>
    </form>
</div>

</body>
</html>
