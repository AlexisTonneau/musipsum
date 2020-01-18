<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL ?>/css/administration/recherche.css">
    <script src="<?=URL?>js/validation.js"></script>

    <title>Buscar</title>

</head>
<body>
<p class="body">

<?php
require_once 'espanol/views/views_accueil/viewHeader.php';?>
<div class="accounts">
    <?php
if (Search::initializeSearchAdmin() !== null){
    foreach (Search::initializeSearchAdmin() as $account)
    {
        ?><div class="account">
        <?php
        echo '<br/>' . $account->getFirstName();
        echo ' ' . $account->getName() . "\t\t\t\t";
        ?>



        <form method="post" action="<?=URL?>es/administration/delete-account" onsubmit="return checkForm()" class="form">
            <input type="hidden" name="delete" value="<?=$account->getId()?>">
            <button type="submit" class="button-submit" id="delete" name="submit_param" value="<?=$account->getId()?>">
                Suprimir
            </button>
        </form>
        <form method="post" action="<?=URL?>es/administration/modify-account" class="modify">
            <input type="hidden" name="modify" value="<?=$account->getId()?>">
            <button type="submit" class="button-submit" id="modify" name="submit_param" value="<?=$account->getId()?>">
                Editar
            </button>
        </form>


        </div>
        <?php
    }echo '</div>';
    }
    else{
    ?>
    <h3>
    No se encontraron usuarios
</h3>
<?php
}
echo '</body>';
//require_once ('espanol/views/views_accueil/viewFooter.php');