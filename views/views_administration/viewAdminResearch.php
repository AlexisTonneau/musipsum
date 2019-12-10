<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL ?>/css/administration/recherche.css">
    <link rel="script" href="<?=URL?>js/validation.js">

    <title>Recherche</title>

</head>

<p class="body">

<?php
require_once 'views/views_accueil/viewHeader.php';

if (Search::initializeSearch() !== null){
    foreach (Search::initializeSearch() as $account)
    {
        ?><div class="account">
        <?php
        echo '<br/>' . $account->getFirstName();
        echo ' ' . $account->getName() . "\t\t\t\t";
        ?>



        <form method="post" action="<?=URL?>/search" onsubmit="return checkForm()" class="form">
            <input type="hidden" name="delete" value="<?=$account->getId()?>">
            <button type="submit" class="button-submit" id="delete" name="submit_param" value="<?=$account->getId()?>">
                Supprimer
            </button>
        </form>
        <form method="post" action="<?=URL?>/search" class="modify">
            <input type="hidden" name="modify" value="<?=$account->getId()?>">
            <button type="submit" class="button-submit" id="modify" name="submit_param" value="<?=$account->getId()?>">
                Modifier
            </button>
        </form>

        <button class="link" ><?=AccountManager::accountTypeString($account)?></button>

        </div>
        <?php
    }
}
else{
?>
<h3>
    Aucun utilisateur trouvé
</h3>
<?php
}