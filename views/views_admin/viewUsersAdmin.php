<?php
if(isset($_POST['déconnexion'])){
    session_destroy();
    header('Location: '.URL.'/accueil');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=URL?>/css/admin/Utilisateur.css">

    <title>Gestion Utilisateur</title>

</head>

<body class="body">
<?php
require_once 'views/views_accueil/viewHeader.php';
?>

<div class="middle_page">
    <div>
        <!--<p>--><img class="img_portrait" src="<?=URL?>/images/utilisateur.png" alt="portrait"><!--<p>-->
    </div>

    <div class="autoecole">
        Autoécole de Paris  <?php //TODO Back-end of driving school?>
    </div>

    <div>
        <input type="search" name="user" placeholder="         Rechercher un utilisateur" class="id_user">
        <img class="img_loupe" src="<?=URL?>/images/loupe.png" alt="loupe">
    </div>

    <div>
        <btn class="btn btn_compte">
            <p class="centrer"><a class="centrer_compte" href="<?=URL?>adminaccount/newaccount">Ouvrir un compte</a></p>
        </btn>
    </div>
    <div>
        <btn class="btn btn_capteurs">
            <p class="centrer"><a class="centrer_capteur" href="<?=URL?>adminaccount/handlecaptor">Gérer</a></p>
        </btn>
    </div>
    <div>
        <form class="btn btn_deconnexion" method="post" action="">
            <p class="centrer"><input type="submit" value="Déconnexion" name="déconnexion"></p>
        </form>
    </div>
</div>



</div>
</body>
</html>
