<?php
require_once('francais/views/views_accueil/viewHeader.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">

    <title>Administration</title>

    <link rel="stylesheet" href="<?= URL ?>css/administration/faq.css">

</head>

<body class="body">

<h2 class="h2">

    Modifier la FAQ
</h2>
<div class="formulaire">
    <p>Nouvelle question</p>
    <form class="cgu" method="post" action="">
        <input type="text" class="input question" name="question" >
        <label>
            <textarea name="reponse" class="input input_text"></textarea>
        </label>
        <br>
        <div class="buttons">
            <input type="submit" class="button-submit">
        </div>
    </form>
</div>

</div>
<?php
$i = 1;
foreach ($faq as $couple) {
    ?>
    <div class="formulaire">
        <p>Question <?= $i ?></p>
        <form class="cgu" method="post" action="">
            <input type="text" class="input question" name="question" value="<?= $couple[1] ?>">
            <label>
                <textarea name="reponse" class="input input_text"><?= $couple[2] ?></textarea>
            </label>
            <input type="hidden" name="id"  value="<?= $couple[0] ?>">
            <br>
            <div class="buttons">
                <input type="submit" class="button-submit">
                <a class="delete" href="<?= URL ?>fr/administration/faq/<?= $couple[0] ?>">Supprimer</a>
            </div>
        </form>
    </div>
    <?php
    $i++;
}
?>
</body>
