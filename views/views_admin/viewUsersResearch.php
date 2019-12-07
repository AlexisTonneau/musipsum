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
<body class="body">

<?php
require_once 'views/views_accueil/viewHeader.php';

if (Search::initializeSearch() !== null){
foreach (Search::initializeSearch() as $account)
{

echo '<br/>' . $account->getFirstName();
echo ' ' . $account->getName() . "\t\t\t";
?> <a class="link" href="#">Démarrer</a>
    <form method="post" action="<?=URL?>adminaccount/search" onsubmit="return checkForm()">
        <input type="hidden" name="delete" value="<?=$account->getId()?>">
        <button type="submit" name="submit_param" value="<?=$account->getId()?>">
                Delete
        </button>
    </form>

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

