<?php           //TODO Input Admin account, Instructor account or reg account; if admin, list of driving schools from database


$msg = Register::check();
if($msg === "checked"){
    header('Location: '.URL.'account');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL?>/css/admin/Connect.css">
    <title>Ouverture Compte</title>

</head>

<body class="body">
<?php
require_once 'views/views_accueil/viewHeader.php';
?>
<form action="" method="post">
    <fieldset class="fieldset">
<div class="milieupage">
    <p class="titre">Ouvrir un compte</p>
    <div class="info_personnelles">


        <block class="bloc_1">
            <div class="info">
                <p class="a mail">Adresse mail *  <br/>
                    <input type="email" name="mail_address" class="id iden id_mail" style="height: 30px" required> </p>
                <p class="a motdepasse">Mot de passe *  <br/>
                    <input type="password" name="password" class="id iden id_password" style="height: 30px" required> </p>
                <p class="a confirm">Confirmer le mot de passe *  <br/>
                    <input type="password" name="confirmation" class="id iden id_confirmation" style="height: 30px" required> </p>

            </div>

            <div class="pre_nom">

                <p class="a nom">Nom *  <br/>
                    <input type="text" name="name" class="id identif id_name" required> </p>
                <p class="b prénom">Prénom *  <br/>
                    <input type="text" name="first_name" class="id identif id_firstname" required> </p>
            </div>
        </block>

        <block class="bloc_2">
            <p class="naissance">Date de naissance *
                <div class="c">
            <p class="day">
                JJ
                <input type="number" name="jour" class="id date id_jour" min="1" max="31">
                MM
                <input type="number" name="mois" class="id date id_mois" min="1" max="12">
                AAAA
                <input type="number" name="annee" class="id date id_annee" min="1970" max="2002">
            </p>
    </div>
    </p>

    <div class="IMC">
        <p class="poids">Poids (kg)   <br/>
            <input type="number" name="weight" class="id taille_masse id_kilo" step="0.1" min="40"> </p>
        <p class="taille">Taille (cm)   <br/>
            <input type="number" name="height" class="id taille_masse id_metre" min="120"> </p>
    </div>

    <div class="genre">
        <form action="" method="post">
        <label for="genre-male" name="genre" class="a gen male">Homme </label>
        <input id="genre-male" type="checkbox" class="id id_ent">
        <label for="genre-female" name="genre" class="gen female">Femme </label>
        <input id="genre-female" type="checkbox" class="id id_ent">
        <label for="genre-binare" name="genre" class="gen no_binare" >Non spécifié </label>
        <input id="genre-binare" type="checkbox" class="id id_ent">
        </form>
    </div>


    </block>
</div>
</div>

<footer class="footer_open">
    <div>
        <btn class="save">
            <input class="btn_save"  type="submit" value = "Enregistrer" >
        </btn>

        <br/><br/>
        <div class="check_message">
        <?php
        echo $msg;
        ?>
        </div>
    </div>
</footer>
    </fieldset>
</form>

</body>
</html>
