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
<?php
require_once ('espanol/views/views_accueil/viewHeader.php');

?>

<body class="body">
<div class="middlepage" style="height: 100%;">
    <div>
        <!--<p>--><img class="image_flottante" src="<?=URL?>images/carrésbleus.png" alt="double carré" align="center"><!--<p>-->
    </div>

    <div align="center">
        <!--<p>--><img class="bonhomme" src="<?=URL?>images/icone_utilisateur.png" alt="portrait"><!--<p>-->

    </div>


    <div class="Connexion">
        Conexión
    </div>

    <div class="status" hidden>
        abc
    </div>

    <a class="mdp_oubli" href="<?=URL?>es/password">
        Contraseña olvidada ?
    </a>

    <form class="mail" action="" method="post" id="form_mail">

        <div>
            <input type="text" name="mail" placeholder="Correo electrónico" class="id_mail" id="id_mail">
        </div>
        <div>
            <input type="password" name="mdp" placeholder="Contraseña" id="id_mdp" class="id_mdp">
        </div>

        <div>
            <button type="submit" form="form_mail" class="fleche"> <img src="<?=URL?>images/flèchebleu.png" alt="flèche" width="40px"></button>
        </div>
    </form>


    <div>
        <button type="submit" form="form_mail" class="fleche" id="button_submit"> <img src="<?=URL?>images/flèchebleu.png" alt="flèche" width="40px"></button>
    </div>



</div>



</script>
</body>
</html>

<?php
require_once ('viewFooter.php')
?>
