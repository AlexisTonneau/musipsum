<?php           //TODO Vue choix type test  form method=post



require_once ('english/views/views_accueil/viewHeader.php');
?>

    <!DOCTYPE html>
    <html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= URL ?>/css/capteurs/body.css">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>/css/welcome/header.css">
    <style type="text/css">
    </style>
    <title>Mon compte</title>
</head>

<body>

<form action="" method="post">
<div class="type_account">
    <label for="id_test" >Choisir le test</label>
    <div class="type_account_container">
        <select name="id_test" id="type_account">
            <?php
                foreach ($tests_models as $model){?>
                    <option value="<?=$model->getId()?>" ><?=$model->getName()?></option>
              <?php }
                ?>
        </select>
    </div>
</div>
    <input type="submit" value="Envoyer" style="margin-left: 0px !important;">
</form>
</body>
<?php