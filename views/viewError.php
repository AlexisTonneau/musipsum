<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <title>Erreur 404</title>

</head>
<header>
    <?php
    require_once "views_accueil/viewHeader.php";
    ?>
</header>
<body class="body" >
<h1 style="margin-left: 1.5%">
    Erreur 404
</h1>
<h2  style="margin-left: 1.5%">
    <?php echo $errorMessage;?>

</h2>

</body>



