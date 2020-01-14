<?php //TODO Build page
/**
 * Page pour sélectionner le test dont on veut afficher les stats
 */

?>

<!DOCTYPE html>
<html lang="en">
​
<head>
    ​
    <meta charset="UTF-8">
    <title>Mes stats</title>
    <link rel="stylesheet" type="text/css" href="<?= URL ?>css/user/choose_test.css">
    ​
</head>
<?php
require_once('espanol/views/views_accueil/viewHeader.php');
?>
<body>
<div class="buttons">
<?php $i=0;
if(count($tests_account)==0){
    ?>
    <h2 style="justify-content: center">
        Vous n'avez pas encore de tests disponible !
    </h2>
    <?php
}
foreach ($tests_account as $test_en_cours) {

    ?>

    <form id="form<?=$i?>" action="<?=URL?>es/account/stat/<?=$test_en_cours->getId()?>" >
        <button class="button" type="submit" id="button" form="form<?=$i?>" >Test du <?=$test_en_cours->getDate()?></button>
    </form>

    <?php $i++;
}
?>
</div>


</body>
