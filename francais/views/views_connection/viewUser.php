
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
<body class="police">
<?php
require_once 'francais/views/views_accueil/viewHeader.php';
?>
<div class="body">


  <div class="centrer_page">

    <div class="id_utilisateur">
        <div class="titre_id">
            <p id="nom_prenom"><?php echo $account->getName().' '.$account->getFirstName();?></p>
        </div>
        <div class="txt_id">
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Adresse mail : </p>
                <p class="txt_id_php"><?php echo $account->getMailAddress();?></p>
            </div>
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Genre : </p>
                <p class="txt_id_php">AF</p>
            </div>
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Taille : </p>
                <p class="txt_id_php"> <?php echo $account->getHeight();?></p>
            </div>
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Masse : </p>
                <p class="txt_id_php"><?php echo $account->getWeight();?></p>
            </div>
            <div class="div_txt_id_1">
                <p class="txt_id_spe">Né le : </p>
                <p class="txt_id_php">10/10/2010</p>
            </div>
        </div>
    </div>
</div>

  <div class="button1">

      <button class="bouton_resultat"  onclick="window.location.href = '<?=URL?>fr/account/stat'">Consulter mes résultats</button>
    </div>


<div>
    <form method="post" action="<?=URL?>fr/account/modify">

        <input type="hidden"  name="modify" value="<?=$account->getId()?>">

        <input type="submit"  name="modify" value="Modifier mon profil">

    </form>
</div>
<div>
    <form method="post" action="<?=URL?>fr/account/disconnect">
        <input type="submit" name="disconnect" value="Me déconnecter">
    </form>
</div>


</body>
</html>
