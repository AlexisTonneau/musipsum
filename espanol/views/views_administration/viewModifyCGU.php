<?php
require_once ('espanol/views/views_accueil/viewHeader.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">

    <title>Administración</title>

    <link rel="stylesheet" href="<?=URL?>css/administration/input.css">

</head>

<body class="body">

<h2 class="h2">

Modificar los términos y condiciones

</h2>
<div class="formulaire">
    <form class="cgu" method="post" action="">
        <label>
            <textarea name="cgu" class="input_text"><?=Administration::getData('cgu')?></textarea>
        </label>
        <input type="submit">
    </form>
</div>
</body>
