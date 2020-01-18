<!DOCTYPE html>
<html lang="en">
​
<head>
    ​
    <meta charset="UTF-8">
    <title>Mis estadísticas</title>
    <link  rel="stylesheet" type="text/css" href="<?=URL?>css/user/graphics.css" >
    <script type="text/javascript" src="<?=URL?>scripts/data_display.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    ​
</head>
<?php
require_once ('espanol/views/views_accueil/viewHeader.php');
?>
<body>
<h1 class="titre_test">Prueba de <?=$test_searched->getDate()?></h1>
<p hidden id="test_id"><?=$_GET['search']?></p>
<div class="titles">
    <div id="temp" >Temperatura</div>
    <div id="freq" >Presión del corazón</div>
</div>
<div class="charts_left">
<div id="chartContainerTemp" class="temperature" style="height: 300px;  margin: 1%;"></div>
<div id="chartContainerFreq" class="freq" style="height: 300px; margin: 1%;"></div>
</div>

</body>


<?php
require_once ('espanol/views/views_accueil/viewFooter.php');
