<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/css/start/body.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
    <script type="text/javascript" src="/js/search.js" >

</head>
<style type="text/css">
    body {
        background-image: url("<?=URL?>/images/slide_2.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<body class="body_start">
<?php
require_once 'views/views_accueil/viewHeader.php';
?>
<div class="bouton_search">
    <div class="bouton_play">
        <img src="<?=URL?>/images/bouton_play.png" href="<?=URL?>" class="bouton_play_img">
    </div>
    <div class="recherche">
        <br />
        <input type="text" id="search_text" name="search_text" placeholder="Rechercher un utilisateur">
        <input type="image" src="<?=URL?>/images/icone_loupe.png" class="icone_loupe" name="">
    </div>
</div>
<br />
<div id="display">

</div>

</body>
</html>




















