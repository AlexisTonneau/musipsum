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
            <div id="info_personnelles">
                ​
                ​
                <div id="denomination">
                    ​
                    <p id="name">Nom<br/>
                        <input type="text" value="<?=$ds->getName()?>" name="name" class="identif" id="name" size="30"> </p>
                    <p id="mail_auto">Adresse mail  <br/>
                        <input type="text" name="mail_address" value="<?=$ds->getMailAddress()?>" class="identif" id="firstname" size="30"> </p>
                </div>
    ​
                <div id="contact">
                    <p id="telephone">Téléphone   <br/>
                        <input type="text" value="<?=$ds->getPhoneNumber()?>" name="phone" class="contact_agence" id="tel_agence" step="0.1" size="30"> </p>
                    <p id="adresse">Adresse   <br/>
                        <input type="text" value="<?=$ds->getAddress()?>" name="adress" class="contact_agence" id="adresse_agence" size="30"> </p>
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
