<?php

require_once ('english/views/views_accueil/viewHeader.php');
?>

<!DOCTYPE html>
<html lang="en">
​
<head>
    ​
    <meta charset="UTF-8">
    <title>Ouverture Compte</title>
    <!--<link type="text/css" rel="stylesheet" href="<?=URL?>css/admin/Connect.css">-->
    <link type="text/css" rel="stylesheet" href="<?=URL?>css/account/modify.css">
    ​
</head>
​
<body class="body">
​
<form action="" method="post" class="form">
    <fieldset class="fieldset">
        <div class="milieupage">
            ​
            <div class="info_personnelles">
                ​
                    ​
                    <div class="pre_nom">
                        ​
                        <p class="a nom" id="name">Nom<br/>
                            <input type="text" value="<?=$account->getName()?>" name="name" class="id identif id_name" > </p>
                        <p class="b prénom">Prénom  <br/>
                            <input type="text" name="first_name" value="<?=$account->getFirstName()?>" class="id identif id_firstname" > </p>
                    </div>
                </block>
                ​
                <block class="bloc_2">
                    <p class="naissance">Birthday *
                        <div class="c">
                    <p class="day">
                        DD
                        <input type="number" value="<?=$account->getNaissanceJour()?>" name="jour" class="id date id_jour" min="1" max="31" >
                        MM
                        <input type="number" value="<?=$account->getNaissanceMois()?>" name="mois" class="id date id_mois" min="1" max="12" >
                        YYYY
                        <input type="number" name="annee" value="<?=$account->getNaissanceAnnee()?>" class="id date id_annee" min="1960" max="2002" >
                    </P>
            </div>
        </div>
            </p>
            <div class="droite">
            ​
            <div class="IMC">
                <p class="poids">Poids (kg)   <br/>
                    <input type="number" value="<?=$account->getWeight()?>" name="weight" class="id taille_masse id_kilo" step="0.1" > </p>
                <p class="taille">Taille (cm)   <br/>
                    <input type="number" value="<?=$account->getHeight()?>" name="height" class="id taille_masse id_metre" > </p>
            </div>
            ​<?php
            if(Model::getCurrentAccount()->getAccountType()!=Model::REGULAR_USER) {
                ?>
                <div class="type_account">
                    <label for="type_account">Choose the type of account *</label>
                    <div class="type_account_container">
                        <select name="account_type" id="type_account">
                            <?php if (Model::getCurrentAccount()->getAccountType() == Model::ADMINISTRATOR_USER) {
                                echo('                ?>
                        <option value="admin" >Compte Administrateur</option>
                        <?');
                            } ?>
                            <option value="monitor">Monitor Account</option>
                            <option value="user">Customer account</option>
                        </select>
                    </div>
                </div>
                <?php
            }
            ?>

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
        <input type="hidden" name="id" value="<?=$account->getId()?>" >

    </fieldset>
</form>
​<?php require_once ('english/views/views_accueil/viewFooter.php');?>
</body>
</html>

