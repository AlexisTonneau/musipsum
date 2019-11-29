<?php   //TODO Add 'Modify driving school' button which needs to be redirected to '<URL>adminaccount/modify-drivingschool'

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
          <?php
            echo unserialize($_SESSION['driving_school'])->getName();
          ?>
    </div>

    <div>
        <form  action="<?=URL?>adminaccount/search" method="post" >
        
        <input type="text" name="search" placeholder="         Rechercher un utilisateur" class="id_user">
        <input type="submit" class="img_loupe" src="<?=URL?>/images/loupe.png" alt="loupe">

    
        </form>
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
    <div class="btn_deconnexion">
            <a class="centrer" href="<?=URL?>adminaccount/disconnect">Se déconnecter</a>
    </div>
</div>



</div>
</body>
</html>
