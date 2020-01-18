<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=URL?>/css/administration/Users.css">
    <link rel="stylesheet" type="text/css" href="<?= URL?>/css/welcome/main.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="<?=URL?>scripts/autocompletion.js"></script>
    <title>Administration</title>

</head>

<body class="body">
<?php
require_once 'espanol/views/views_accueil/viewHeader.php';
?>

<section class="middle_page">
    <div>
        <!--<p>--><img class="img_admi" src="<?=URL?>/images/admi.jpg" alt="image administration"><!--<p>-->
    </div>

    <div class="autoecole">
        Administration
    </div>

    <div>
        <form  action="<?=URL?>es/administration/search" method="post" id="form-search" >
            <div class="ui-widget">
                <label for = "automplete-1"></label>
                <input type="text" name="search" placeholder="Buscar una persona" class="id_user"  id="bar" onchange="regex()">
                <input type="image" class="img_loupe" src="<?=URL?>/images/loupe.png" alt="submit">

            </div>
        </form>
        <div class="autocomplete">
            <ul>
                <?php
                $i =0;
                foreach (AccountManager::getAllAccounts() as $account){

                    ?>
                    <li class="account" id="account-<?=$i?>"><?=$account->getFirstName().' '.$account->getName()?></li>
                    <?php
                    $i++;
                }

                ?>
        </div>

    </div>

    <div class="all_buttons">
        <btn class="btn btn_compte">
            <p class="centrer"><a class="centrer_compte" href="<?=URL?>es/administration/newaccount">Ouvrir un compte</a></p>
        </btn>
        <btn class="btn btn_cgu">
            <p class="centrer"><a class="centrer_compte" id="cgu_button" href="<?=URL?>es/administration/cgu">Modification CGU</a></p>
        </btn>
        <btn class="btn btn_autoecole">
            <p class="centrer"><a class="centrer_compte" href="<?=URL?>es/administration/faq">Modification FAQ</a></p>
        </btn>
        <btn class="btn btn_mentions_legales">
            <p class="centrer"><a class="centrer_compte" id="ml" href="<?=URL?>es/administration/mentions-legales">Modification Mention Légales</a></p>
        </btn>
    </div>

    <!--<div class="btn_modifier">
        <a class="modifier" href="<?=URL?>instructor/modify-drivingschool">Modifier l'auto-école</a>
    </div>-->
    <div class="btn_deconnexion" id="deco">
        <a class="centrer" href="<?=URL?>es/administration/disconnect">Se déconnecter</a>
    </div>
    <div class="btn_deconnexion" id="auto">
        <a class="centrer" href="<?=URL?>es/administration/list-driving-school">Liste des auto-écoles</a>
    </div>
</section>

</body>
</html>
