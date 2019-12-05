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
    ?> <a class="link" href="<?=URL.'test'?>">Démarrer</a> <?php
}

