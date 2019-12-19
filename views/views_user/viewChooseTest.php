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
require_once('views/views_accueil/viewHeader.php');
?>
<body>
<div class="buttons">
<?php $i=0;
foreach ($tests_account as $test_en_cours) {

    ?>

    <form id="form<?=$i?>" action="<?=URL?>account/stat/<?=$test_en_cours->getId()?>" >
        <button class="button" type="submit" id="button" form="form<?=$i?>" >Test du <?=$test_en_cours->getDate()?></button>
    </form>

    <?php $i++;
}
?>
</div>

</body>
