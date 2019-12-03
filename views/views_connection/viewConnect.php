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

    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/validation.js"></script>





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
        <!--<p>--><img class="bonhomme" src="images/icone_utilisateur.png" alt="portrait"><!--<p>-->

    </div>


    <div class="Connexion">
        Connexion
    </div>

    <div class="mdp_oubli">
        Mot de passe oublié ?
    </div>

    <form class="mail" action="" method="post" id="form_mail">

        <div>
            <input type="text" name="mail" placeholder="Adresse mail" class="id_mail">
        </div>
        <div>
            <input type="password" name="mdp" placeholder="Mot de passe" class="id_mdp">
        </div>

    </form>

    <div>
        <button type="submit" form="form_mail" class="fleche"> <img src="images/flèchebleu.png" alt="flèche" width="40px"></button>
    </div>


</div>


</body>
</html>


<style>
/* Body */

@font-face {
  font-family: 'gotham_book';
  src:url('fonts/Gotham-Book.otf');
}

.body
{
  font-family: 'gotham_book', serif;

}

.middlepage{
display: flex;
}


.image_flottante{
width: 85%;
height: 85%;
position:absolute;
position: center;
left: 5%;
right: 10%;
}


.bonhomme{
position: absolute;
left: 44%;
top: 30%;
height: 80px;
}


.fleche{
position: absolute;
border: none;
background-color: transparent;
left: 76%;
top: 64%;
height: 20px;
}


.Connexion{
position:absolute;
left: 42%;
top: 45%;

color: white;
font-size: 30px;
font-style: revert;
}


.mdp_oubli{
position: absolute;
color: white;
font-style: revert;
left: 63.45%;
top: 71%;
}


.id_mail {
position: absolute;
left: 25%;
top: 59%;
width: 49%;
height: 4%;
}


.id_mdp {
position: absolute;
left: 25%;
top: 65%;
width: 49%;
height: 4%;
}



/*.connection_status {
visibility: hidden<?php   if(is_null($_SESSION['flash'])){echo 'hidden';}  else{echo 'visible';}            ?>
position: absolute;
left: 25%;
top: 83%;
width: 49%;
height : 7%;
background-color: <?php  if($_SESSION['flash']=="Mail ou mot de passe incorrect"){echo '#ff0000';}
else {echo '#00ff00';}
?>;
}*/

</style>
