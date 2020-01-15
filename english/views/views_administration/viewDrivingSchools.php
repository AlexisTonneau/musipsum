<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL ?>/css/admin/Recherche.css">
    <link rel="script" href="<?=URL?>/scripts/validation.js">

    <title>Research</title>

</head>
<script src="<?=URL?>/scripts/welcome.js"></script>
<script src="<?=URL?>/scripts/validation.js"></script>
<p class="body">

<?php
require_once 'english/views/views_accueil/viewHeader.php';

if (DrivingSchoolManager::listDS() !== null){
    foreach (DrivingSchoolManager::listDS() as $account)
    {
        ?><div class="account">
        <?php
        echo ' <br />' . $account->getName();
        ?>



        <form method="post" action="<?=URL?>en/administration/list-driving-school/delete" onsubmit="return checkForm()" class="form" >
            <input type="hidden" name="delete" value="<?=$account->getId()?>">
            <button type="submit" class="button-submit" id="delete" name="submit_param" value="<?=$account->getId()?> " >
                Remove
            </button>
        </form>
        <form method="post" action="<?=URL?>en/administration/modify-driving-school" class="modify" >
            <input type="hidden" name="modify" value="<?=$account->getId()?>">
            <button type="submit" class="button-submit" id="modify" name="submit_param" value="<?=$account->getId()?>">
                Modify
            </button>
        </form>

       <!-- <button class="link" href="#">Démarrer</button>-->

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