<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=URL?>/css/admin/Recherche.css">

    <title>Recherche</title>

</head>

<body class="body">

<?php
require_once 'views/views_accueil/viewHeader.php';


foreach ( Search::initializeSearch() as $account)
{

        echo '<br/>'.$account->getFirstName();
        echo ' '.$account->getName()."\t\t\t";
    ?>  <form method="post" action="<?=URL?>adminaccount/search" class="modify">
    <input type="hidden" name="launch" value="<?=$account->getId()?>">
    <button type="submit" class="button-submit" id="launch" name="submit_param" value="<?=$account->getId()?>">
        Démarrer
    </button>
</form> <?php
}
