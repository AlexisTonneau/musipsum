<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL ?>/css/admin/Recherche.css">

    <title>Recherche</title>

</head>
<script>
    function checkForm() {
        return window.confirm('Cette opération est irréversible...')

    }
</script>
<p class="body">

<?php
require_once 'views/views_accueil/viewHeader.php';

if (Search::initializeSearch() !== null){
    foreach (Search::initializeSearch() as $account) {
        ?>
        <div class="account">
        <?php
        echo  $account->getFirstName();
        echo ' ' . $account->getName() . "\t\t\t\t";
        ?>
<div class="formulaires">
    <div class="form-launch">
        <form method="post" action="<?= URL ?>instructor/search">
            <input type="hidden" name="launch" value="<?= $account->getId() ?>">
            <button class="link" type="submit" value="<?= $account->getId() ?>">Démarrer</button>
        </form>
    </div>

        <div class="form-modify">
            <form method="post" action="<?= URL ?>instructor/search" class="modify">
                <input type="hidden" name="modify" value="<?= $account->getId() ?>">
                <button type="submit" class="button-submit" id="modify" name="submit_param"
                        value="<?= $account->getId() ?>">
                    Modifier
                </button>
            </form>
        </div>
         <div class="form-delete">
        <form method="post" action="<?= URL ?>instructor/search" onsubmit="return checkForm()" class="form">
            <input type="hidden" name="delete" value="<?= $account->getId() ?>">
            <button type="submit" class="button-submit" id="delete" name="submit_param"
                    value="<?= $account->getId() ?>">
                Supprimer
            </button>
        </form>
    </div>
        </div>
</div>
<br/>
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

