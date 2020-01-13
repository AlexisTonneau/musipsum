<!DOCTYPE html>
<html lang="en">
​
<head>
    ​
    <meta charset="UTF-8">
    <title>Mes stats</title>
    <link  rel="stylesheet" type="text/css" href="<?=URL?>css/user/graphics.css" >
    <script type="text/javascript" src="<?=URL?>js/data_display.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    ​
</head>
<?php
require_once ('francais/views/views_accueil/viewHeader.php');
?>
<body>
<h1 class="titre_test">Test du <?=$test_searched->getDate()?></h1>
<p hidden id="test_id"><?=$_GET['search']?></p>
<div class="titles">
    <div id="temp" >Température</div>
    <div id="freq" >Tension cardiaque</div>
</div>
<div class="charts_left">
<div id="chartContainerTemp" class="temperature" style="height: 300px;  margin: 1%;"></div>
<div id="chartContainerFreq" class="freq" style="height: 300px; margin: 1%;"></div>
</div>

</body>


<?php
require_once ('francais/views/views_accueil/viewFooter.php');
