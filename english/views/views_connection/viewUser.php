<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= URL ?>/css/capteurs/body.css">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>/css/welcome/header.css">
    <style type="text/css">
    </style>
    <title>Mon compte</title>
</head>
<body class="police">
<?php
require_once 'english/views/views_accueil/viewHeader.php';
?>
<div class="body">
    <div class="id_utilisateur">
        <div class="titre_id">
            <p id="nom_prenom"><?php echo $account->getName().' '.$account->getFirstName();?></p>
        </div>
        <div class="txt_id">
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Mail adress : </p>
                <p class="txt_id_php"><?php echo $account->getMailAddress();?></p>
            </div>
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Sexe : </p>
                <p class="txt_id_php">AF</p>
            </div>
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Size : </p>
                <p class="txt_id_php"> <?php echo $account->getHeight();?></p>
            </div>
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Weight : </p>
                <p class="txt_id_php"><?php echo $account->getWeight();?></p>
            </div>
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Born the : </p>
                <p class="txt_id_php">10/10/2010</p>
            </div>
        </div>
    </div>
</div>

  <div class="button1">
      <button class="bouton_resultat"  onclick="window.location.href = '<?=URL?>en/account/stat'">  View my results</button>
    </div>


      <!--<div class="button2">
        <button type="submit" class="button_submit" id="modify" name="submit_param" value="<?=$account->getId()?>">
            Modifier
          </button>
        <button class="button_deconnexion" onclick="">Me déconnecter</button>
    </div>
*/-->



<div>
    <form method="post" action="<?=URL?>en/account/modify">

        <input type="hidden"  name="modify" value="<?=$account->getId()?>">

        <input type="submit"  name="modify" value="Modify my profile">

    </form>
</div>
<div>
    <form method="post" action="<?=URL?>en/account/disconnect">
        <input type="submit" name="disconnect" value="Disconnect">
    </form>
</div>


</body>
</html>
