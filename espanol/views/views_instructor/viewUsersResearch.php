<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL ?>/css/admin/Recherche.css">

    <title>Recherche</title>

</head>
<script>
    function checkForm() {
        return  window.confirm('Cette opération est irréversible...')

    }
</script>
<p class="body">

<?php
require_once 'espanol/views/views_accueil/viewHeader.php';

if (Search::initializeSearch() !== null){
foreach (Search::initializeSearch() as $account)
{
?><div class="account">
    <?php
echo '<br/>' . $account->getFirstName();
echo ' ' . $account->getName() . "\t\t\t\t";
?>



    <form method="post" action="<?=URL?>es/instructor/search" onsubmit="return checkForm()" class="form">
        <input type="hidden" name="delete" value="<?=$account->getId()?>">
        <button type="submit" class="button-submit" id="delete" name="submit_param" value="<?=$account->getId()?>">
                Suprimir
        </button>
    </form>
    <form method="post" action="<?=URL?>es/instructor/search" class="modify">
    <input type="hidden" name="modify" value="<?=$account->getId()?>">
    <button type="submit" class="button-submit" id="modify" name="submit_param" value="<?=$account->getId()?>">
        Editir
    </button>
    </form>
    <div class="form-launch">
        <form method="post" action="<?= URL ?>es/instructor/search">
            <input type="hidden" name="launch" value="<?= $account->getId() ?>">
            <button class="link" type="submit" value="<?= $account->getId() ?>">Iniciar</button>
        </form>
    </div>
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

