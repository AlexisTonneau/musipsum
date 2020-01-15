<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/css/capteurs/input_checkbox.css">
    <link rel="stylesheet" type="text/css" href="<?=URL?>/css/capteurs/body.css">
    <link rel="stylesheet" type="text/css" href="<?=URL?>/css/capteurs/input_range.css">
    <link rel="stylesheet" type="text/css" href="<?=URL?>/css/capteurs/HandleCaptors.css">
    <link rel="stylesheet" type="text/css" href="<?=URL?>/css/welcome/header.css">
    <!--<link rel="stylesheet" type="text/css" href="css/capteurs/input_range_value.css">-->
    <style type="text/css">
    </style>
    <title>Manage sensors</title>
</head>

<body class="body">
<?php
require_once 'english/views/views_accueil/viewHeader.php';
?>

<div class="gerer_body">
    <div class="gerer" id="gerer_capteurs">
        <div class="type_test">
            <form>
                <p class="titre_type_test">Type of test</p>
                <div class="custom-select">
                    <select id="type_test" name="type_test">
                        <option value="t_1">Test 1</option>
                        <option value="t_2">Test 2</option>
                        <option value="t_3">Test 3</option>
                    </select>
                </div>
            </form>
        </div>

        <div class="quels_capteurs">
            <form action="/action_page.php" class="choix_capteur">
                <p class="titre_choix_capteur"> Which sensors for the test ?</p>
                <label class="checkbox">A
                    <input type="checkbox" value="capteur_A">
                    <span class="checkmark">
  						</span>
                </label>
                <label class="checkbox">B<input type="checkbox" value="capteur_B"><span class="checkmark"></span></label>
                <label class="checkbox">C<input type="checkbox" value="capteur_C"><span class="checkmark"></span></label>
                <label class="checkbox">D<input type="checkbox" value="capteur_D"><span class="checkmark"></span></label>
            </form>

        </div>

        <div class="modif_capteur">
            <form>
                <p class="titre_modif_capteur">Modifie sensors</p>
                <div class="custom-select">
                    <select id="modif_capteur" name="modification_capteur" class="choix_modif">
                        <option value="c_1">Sensor 1</option>
                        <option value="c_2">Sensor 2</option>
                        <option value="c_3">Sensor 3</option>
                    </select>
                </div>
            </form>
        </div>

        <div class="sensi">
            <form action="/action_page.php">
                <p class="titre_sensi">Sensitivity</p>
                <div class="input_range">
                    <input class="input_range_range" type="range" name="sensibilite" min="0" max="100" onchange="updateTextInput(this.value);">
                    <input type="text" id="range_value" class="range_value" value="" readonly>
                </div>
            </form>
        </div>

        <div class="temps_mesure">
            <form action="/action_page.php">
                <p class="titre_temps_mesure">Measurement time</p>
                <input id="temps_mesure" type="text" name="" value=""> s
            </form>
        </div>
    </div>

    <div class="gerer" id="gerer_cgu">
        <div class="titre_modif_cgu">Modify the CGU</div>
        <textarea id="cgu_txt" type="text" name="" value="" style="width: 90%; height: 100%; border-color: #66AFFD"></textarea>
    </div>
</div>

<script type="text/javascript" src="<?=URL?>/scripts/select_box.js"></script>
<script type="text/javascript" src="<?=URL?>/scripts/range_input.js"></script>

</body>

</html>
