<?php           //TODO Vue choix type test  form method=post



require_once ('espanol/views/views_accueil/viewHeader.php');
?>

    <!DOCTYPE html>
    <html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= URL ?>/css/capteurs/body.css">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>/css/welcome/header.css">
    <style type="text/css">
    </style>
    <title>Mi cuenta</title>
</head>

<body>

<form action="" method="post">
<div class="type_account">
    <label for="id_test" >Elige la prueba</label>
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