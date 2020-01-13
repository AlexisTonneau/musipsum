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
    <title>Gérer les capteurs</title>
</head>

<body class="body">
<?php
require_once 'espanol/views/views_accueil/viewHeader.php';
?>

<div class="gerer_body">
    <div class="gerer gerer_capteurs">
        <div class="type_test">
            <form>
                <p class="titre_type_test">Tipo de prueba</p>
                <div class="custom-select">
                    <select id="type_test" name="type_test">
                        <option value="t_1">Prueba1</option>
                        <option value="t_2">Prueba 2</option>
                        <option value="t_3">Prueba 3</option>
                    </select>
                </div>
            </form>
        </div>

        <div class="quels_capteurs">
            <form action="es/action_page.php" class="choix_capteur">
                <p class="titre_choix_capteur">¿Qué sensor para la prueba?</p>
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
                <p class="titre_modif_capteur">Editar un sensor</p>
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
            <form action="es/action_page.php">
                <p class="titre_sensi">Sensibilidad</p>
                <div class="input_range">
                    <input class="input_range_range" type="range" name="sensibilite" min="0" max="100" onchange="updateTextInput(this.value);">
                    <input type="text" id="range_value" class="range_value" value="" readonly>
                </div>
            </form>
        </div>

        <div class="temps_mesure">
            <form action="es/action_page.php">
                <p class="titre_temps_mesure">Tiempo de medición</p>
                <input id="temps_mesure" type="text" name="" value=""> s
            </form>
        </div>
    </div>

    <div class="gerer gerer_cgu">
        <div class="titre_modif_cgu">Modificar los términos y condiciones</div>
        <input id="cgu_txt" type="text" name="" value="" style="width: 85%; height: 100%; border-color: #66AFFD">
    </div>
</div>

<script type="text/javascript" src="<?=URL?>/js/select_box.js"></script>
<script type="text/javascript" src="<?=URL?>/js/range_input.js"></script>

</body>

</html>
