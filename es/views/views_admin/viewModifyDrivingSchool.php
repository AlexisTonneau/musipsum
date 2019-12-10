<?php

require_once ('views/views_accueil/viewHeader.php');
?>

<!DOCTYPE html>
<html lang="en">
​
<head>
    ​
    <meta charset="UTF-8">

    <link type="text/css" rel="stylesheet" href="<?=URL?>css/admin/modify.css">

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
                        <input type="text" value="<?=$ds->getName()?>" name="name" class="id identif id_name" > </p>
                    <p class="b prénom">Adresse mail  <br/>
                        <input type="text" name="mail_address" value="<?=$ds->getMailAddress()?>" class="id identif id_firstname" > </p>
                </div>

                ​
        <div class="droite">
            ​
            <div class="IMC">
                <p class="poids">Téléphone   <br/>
                    <input type="text" value="<?=$ds->getPhoneNumber()?>" name="phone" class="id taille_masse id_kilo" step="0.1" > </p>
                <p class="taille">Adresse   <br/>
                    <input type="text" value="<?=$ds->getAddress()?>" name="adress" class="id taille_masse id_metre" > </p>
            </div>
            ​
            ​

            ​        <input type="hidden" name="id" value="<?=$ds->getId()?>" >


        </div>
        </div>

        ​
        <footer class="footer_open">
            <div>
                <btn class="save">
                    <input class="btn_save"  type="submit" value = "Enregistrer" >
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
</body>
</html>
​<?php require_once ('views/views_accueil/viewFooter.php');?>
