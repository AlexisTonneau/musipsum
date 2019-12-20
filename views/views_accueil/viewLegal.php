<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?=URL?>/css/welcome/cgu.css">
</head>
<body class="body">
<?php
require_once 'viewHeader.php';
?>

<h2>
    Conditions générales d'utilisation
</h2>
<br/>
<div class="data">
    <?=Administration::getData($page)?>
</div>
<?php
require_once ('viewFooter.php');?>
</body>
</html>

