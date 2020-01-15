<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL ?>/css/administration/recherche.css">
    <script src="<?=URL?>js/validation.js"></script>

    <title>Recherche</title>

</head>
<body>
<p class="body">

<?php
require_once 'english/views/views_accueil/viewHeader.php';

if (Search::initializeSearch() !== null){
    foreach (Search::initializeSearch() as $account)
    {
        ?><div class="account">
        <?php
        echo '<br/>' . $account->getFirstName();
        echo ' ' . $account->getName() . "\t\t\t\t";
        ?>



        <form method="post" action="<?=URL?>en/administration/delete-account" onsubmit="return checkForm()" class="form">
            <input type="hidden" name="delete" value="<?=$account->getId()?>">
            <button type="submit" class="button-submit" id="delete" name="submit_param" value="<?=$account->getId()?>">
                Supprimer
            </button>
        </form>
        <form method="post" action="<?=URL?>en/administration/modify-account" class="modify">
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
    No users found

</h3>
<?php
}
echo '</body>';
//require_once ('english/views/views_accueil/viewFooter.php');