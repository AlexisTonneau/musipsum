<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL ?>/css/admin/Recherche.css">

    <title>Recherche</title>

</head>
​<script src="<?=URL?>scripts/validation.js"></script>

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



    <form method="post" action="<?=URL?>en/instructor/search" onsubmit="return checkForm()" class="form">
        <input type="hidden" name="delete" value="<?=$account->getId()?>">
        <button type="submit" class="button-submit" id="delete" name="submit_param" value="<?=$account->getId()?>">
                Remove
        </button>
    </form>
    <form method="post" action="<?=URL?>en/instructor/search" class="modify">
    <input type="hidden" name="modify" value="<?=$account->getId()?>">
    <button type="submit" class="button-submit" id="modify" name="submit_param" value="<?=$account->getId()?>">
        Modify
    </button>
</form>

    <button class="link" href="#">Démarrer</button>

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

