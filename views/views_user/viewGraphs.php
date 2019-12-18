<!DOCTYPE html>
<html lang="en">
​
<head>
    ​
    <meta charset="UTF-8">
    <title>Mes stats</title>

    <script type="text/javascript" src="<?=URL?>js/data_display.js"></script>    ​
</head>
<?php
require_once ('views/views_accueil/viewHeader.php');
?>
<body>
<div id="chartContainerTemp"  style="height: 300px; width: 30%; margin: 1%;"></div>

<p hidden id="test_id"><?=$_GET['search']?></p>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>