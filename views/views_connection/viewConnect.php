<?php //TODO bugs with white pages on click


$msg = Connection::connect();
$_SESSION['flash'] = $msg;

if ($msg === "Connected") {
    //echo $msg;

    header('Location: '.URL.'account');
    exit();
} elseif ($msg === "Connected as admin") {

    header('Location: '.URL.'adminaccount');
    exit();
}
$_SESSION['flash']="";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="utf-8"
    <link rel="stylesheet" href="<?= URL ?>/css/account/connect.css">




    <title>Connexion</title>

</head>

<body class="body">
<?php
require_once ('views/views_accueil/viewHeader.php');

?>
<div class="middlepage">
    <div>
        <!--<p>--><img class="image_flottante" src="images/carrésbleus.png" alt="double carré" align=center"><!--<p>-->
    </div>

    <div aligne="center">
        <!--<p>--><img class="bonhomme" src="images/utilisateur.png" alt="portrait"><!--<p>-->

    </div>


    <div class="Connexion">
        Connexion
    </div>

    <div class="mdp_oubli">
        Mot de passe oublié ?
    </div>

    <form class="mail" action="" method="post">

        <div>
            <input type="text" name="mail" placeholder="Adresse mail" class="id_mail">
        </div>
        <div>
            <input type="password" name="mdp" placeholder="Mot de passe" class="id_mdp">
        </div>
        <div>
            <!--<p>--><input class="flèche" src="<?=URL?>/images/flèchebleu.png" type="submit" alt="flèche"><!--<p>-->

        </div>
    </form>


</div>


</body>
</html>

