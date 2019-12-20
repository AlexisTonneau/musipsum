<?php //TODO bugs with white pages on click

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?=URL?>js/connection.js"></script>

    <link type="text/css" rel="stylesheet" href="<?=URL?>css/account/connect.css">





    <title>Connexion</title>

</head>

<body class="body">
<?php
require_once ('views/views_accueil/viewHeader.php');

?>
<div class="middlepage">
    <div>
        <!--<p>--><img class="image_flottante" src="images/carrésbleus.png" alt="double carré" align="center"><!--<p>-->
    </div>

    <div aligne="center">
        <!--<p>--><img class="bonhomme" src="images/icone_utilisateur.png" alt="portrait"><!--<p>-->

    </div>


    <div class="Connexion">
        Connexion
    </div>

    <div class="status" hidden>
        abc
    </div>

    <a class="mdp_oubli" href="<?=URL?>password">
        Mot de passe oublié ?
    </a>

    <form class="mail" action="" method="post" id="form_mail">

        <div>
            <input type="text" name="mail" placeholder="Adresse mail" class="id_mail" id="id_mail">
        </div>
        <div>
            <input type="password" name="mdp" placeholder="Mot de passe" id="id_mdp" class="id_mdp">
        </div>

    </form>

    <div>
        <button type="submit" form="form_mail" class="fleche" id="button_submit"> <img src="images/flèchebleu.png" alt="flèche" width="40px"></button>
    </div>


</div>


</body>
</html>

