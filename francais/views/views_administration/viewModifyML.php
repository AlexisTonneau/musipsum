<?php
require_once ('francais/views/views_accueil/viewHeader.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">

    <title>Administration</title>

    <link rel="stylesheet" href="<?=URL?>css/administration/input.css">

</head>

<body class="body">

<h2 class="h2">

    Modifier les Mentions Légales
</h2>
<div class="formulaire">
    <form class="cgu" method="post" action="">
        <label>
            <textarea name="m_l" class="input_text"><?=Administration::getData('ml')?></textarea>
        </label>
        <input type="submit">
    </form>
</div>
</body>
