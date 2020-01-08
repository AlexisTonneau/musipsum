<?php
$msg = Register::check();
if($msg === "checked"){
    header('Location: '.URL.'account');
    exit();
}

require_once('english/views/views_accueil/viewHeader.php');
?>

<!DOCTYPE html>
<html lang="en">
​
<head>
    ​
    <meta charset="UTF-8">
    <title>Ouverture Compte</title>
    <link type="text/css" rel="stylesheet" href="<?=URL?>css/admin/Connect.css">
    ​
</head>
​
<body class="body">
​
<form action="" method="post">
    <fieldset class="fieldset">
        <div class="milieupage">
            ​
            <div class="info_personnelles">
                ​
                ​
                <block class="bloc_1">
                    <div class="info">
                        <p class="a mail">Mail adresse  *  <br/>
                            <input type="email" name="mail_address" class="id iden id_mail" style="height: 30px" required> </p>
                        <p class="a motdepasse">Password *  <br/>
                            <input type="password" name="password" class="id iden id_password" style="height: 30px" required> </p>
                        <p class="a confirm">Confirme the password *  <br/>
                            <input type="password" name="confirmation" class="id iden id_confirmation" style="height: 30px" required> </p>
                        ​
                    </div>
                    ​
                    <div class="pre_nom">
                        ​
                        <p class="a nom">Familly Name*  <br/>
                            <input type="text" name="name" class="id identif id_name" required> </p>
                        <p class="b prénom">First Name*  <br/>
                            <input type="text" name="first_name" class="id identif id_firstname" required> </p>
                    </div>
                </block>
                ​
                <block class="bloc_2">
                    <p class="naissance">Birthday *
                        <div class="c">
                    <p class="day">
                        JJ
                        <input type="number" name="jour" class="id date id_jour" min="1" max="31" required>
                        MM
                        <input type="number" name="mois" class="id date id_mois" min="1" max="12" required>
                        AAAA
                        <input type="number" name="annee" class="id date id_annee" min="1960" max="2002" required>
                    </P>
            </div>
            </p>
            ​
            <div class="IMC">
                <p class="poids">Weight (kg)   <br/>
                    <input type="number" name="weight" class="id taille_masse id_kilo" step="0.1" min="40"> </p>
                <p class="taille">Size (cm)   <br/>
                    <input type="number" name="height" class="id taille_masse id_metre" min="120"> </p>
            </div>
            ​
            <div class="type_account">
                <label for="type_account" >Choose type of account *</label>
                <div class="type_account_container">
                    <select name="account_type" id="type_account">
                        <option value="monitor">Compte Moniteur</option>
                        <?php  if(Model::getCurrentAccount()->getAccountType() == Model::ADMINISTRATOR_USER){     echo('                ?>
                        <option value="admin" >Compte Administrateur</option>
                        <?');}?>
<<<<<<< HEAD:views/views_instructor/viewCreateUser.php
                        <option value="user">Compte Client</option>


=======
                        <option value="monitor">Monitor account</option>
                        <option value="user">Customer account</option>
>>>>>>>  Traduction anglais et espagnol:en/views/views_admin/viewCreateUser.php
                    </select>
                </div>
            </div>
            ​
            <div class="genre">
               <!-- <form action="" method="post">-->
                    <label for="genre-male" name="genre" class="a gen male">Men </label>
                    <input id="genre-male" type="checkbox" class="id id_ent" name="gender" value="male">
                    <label for="genre-female" name="genre" class="gen female">Women </label>
                    <input id="genre-female" type="checkbox" class="id id_ent" name="gender" value="female">
               <!-- </form>-->
            </div>
            ​
            </block>
        </div>
        </div>
        ​
        <footer class="footer_open">
            <div>
                <btn class="save">
                    <input class="btn_save"  type="submit" value = "Save" >
                </btn>
                ​
                <br/><br/>
                <div class="check_message">
                    ​
                </div>
            </div>
        </footer>
    </fieldset>
</form>
​
</body>
</html>
