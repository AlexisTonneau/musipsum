<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>Musipsum</title>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?= URL?>/css/welcome/buttons.css">
    <link rel="stylesheet" type="text/css" href="<?= URL?>/css/welcome/welcome.css">
    <link rel="stylesheet" type="text/css" href="<?= URL?>/css/welcome/images.css">
    <link rel="stylesheet" type="text/css" href="<?= URL?>/css/welcome/main.css">
    <link rel="stylesheet" type="text/css" href="<?= URL?>/css/welcome/footer.css">
    <link rel="stylesheet" type="text/css" href="<?= URL?>/css/welcome/carrousel.css">
    <script type="text/javascript" src="<?=URL?>/scripts/welcome.js"></script>
    <style type="text/css">
    </style>
</head>
<body class="body">
<?php
require_once 'viewHeader.php';
?>

<!--<div id="carousel">
  <p class="titre_bienvenue">Bienvenue sur Musipsum !</p>
  <p class="sous_titre_bienvenue">Le produit pour vous aider avec votre futur permis !</p>
</div>

<div id="nom_et_logo_acceuil">
  <img src="images/fond_acc.png" alt="carrousel">
  <p class="nom_site_accueil">Musipsum</p>
</div>-->

<div class="carrousel_accueil">
    <div class="slide passage">
        <img src="<?=URL?>/images/slide_1a.png" class="img img_carrousel_1" style="width: 100%" alt="">
        <div class="carrousel_text carrousel_text_1"></div>
    </div>

    <div class="slide passage">
        <img src="<?=URL?>/images/slide_2a.png" class="img img_carrousel_2" style="width: 100%" alt="">
        <div class="carrousel_text carrousel_text_2"></div>
    </div>

    <div class="slide passage">
        <img src="<?=URL?>/images/slide_3b.png" class="img img_carrousel_3" style="width: 100%" alt="">
        <div class="carrousel_text carrousel_text_3"></div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<div style="text-align:center" class="div_points">
    <span class="point" onclick="currentSlide(1)"></span>
    <span class="point" onclick="currentSlide(2)"></span>
    <span class="point" onclick="currentSlide(3)"></span>
</div>



<footer class="footer welcome footer_welcome">

    <div class="nous_contacter" id="nous-contacter">
        <div class="social_network">
            <img src="<?=URL?>/images/logo_facebook.png" class="img_contact img_contact_fb" alt="facebook">
            <img src="<?=URL?>/images/logo_twitter.png" class="img_contact img_contact_twi" alt="twitter">
            <img src="<?=URL?>/images/logo_instagram.png" class="img_contact img_contact_ig" alt="instagram">
            <img src="<?=URL?>/images/logo_linkedin.png" class="img_contact img_contact_li" alt="linkedin">

            <!--<img src="images/.png" alt="">
            <img src="images/.png" alt="">-->
        </div>
        <div class="box_mail">
            <form action="" method="post">
                <textarea type="text" class="contact_msg" name="Votre message" placeholder="Tu mensaje..." style="border: 1px solid #66AFFD; color: #66AFFD; height: 150px" id="contact"></textarea>
            <?php
           // Connection::sendMail();
            ?>
            </form>

        </div>


        <div class="icones_button_contact">
            <img src="<?=URL?>/images/icone_at.png" class="icone_button_contact icone_at">
                <button type="submit" form="form_envoi" class="send">
                    <img src="<?=URL?>/images/icone_envoi.png" class="icone_button_contact icone_envoi">
                </button>
        </div>


        <div class="icones_contact">

        </div>
        <div class="" ></div>
    </div>



    <div class="contact" >


        <p class="adresse_img">
            <img src="<?=URL?>images/icone_batiment.png" alt="adresse">
            <!--<p class="text contact_txt adresse_txt">-->
            <?php echo DrivingSchoolManager::getAddressFromUser(); ?><!--</p>-->
        </p>

        <p class="horaires_img">
            <img src="<?=URL?>/images/icone_horloge.png" alt="horloge">
            <!--</p>-->
            <!--<p class="text contact_txt horaires_txt">-->
            Lun - Vie | 8:00 - 18:00
        </p>

        <p class="telephone_img">
            <img src="<?=URL?>/images/icone_telephone.png" alt="telephone">
            <?php
            echo DrivingSchoolManager::getPhoneFromUser();
            ?>

        </p>


    </div>

    <div class="about_footer" >
        <div class="footer_about_title">
            <h3 class="txt_about_title">A proposito</h3>
        </div>
            <p class="txt_about" ><strong>¿Qué hacer en este sitio?</strong><br>
            ¿Parece que no puede obtener su licencia de conducir y no conoce la causa?<br> 
            ¡Este sitio es para usted! <br>
            ¡Le sugerimos que realice pruebas en línea para resaltar las razones de su fracaso! <br>            
            <strong>Por qué ?</strong><br>
            Finalmente puede encontrar soluciones adecuadas para obtener su licencia de conducir.<br>
            Las autoescuelas pueden adaptar las sesiones de manejo teniendo en cuenta las dificultades técnicas del aprendiz.
            <br>
            <strong>Como hacer ?</strong><br>
            Simplemente vaya a una escuela de manejo y solicite credenciales para acceder a las pruebas. </p>
    </div>




    <!--<div class="A_propos">

        <button class="btn a_propos_footer">A propos</button>
        <p class="A_propos">

        </p>

    </div>-->


</footer>

<script type="text/javascript" src="<?=URL?>/scripts/carrousel.js"></script>

</body>
</html>
<?php
require_once ('viewFooter.php');
?>


<style>
    .send {
        position: absolute;
        left: 85%;
        bottom: 10%;
        background-color: transparent;
        border: none;
        width: 12%;
        height: 15%;
    }

    .icone_envoi {
        position: absolute;
        left: -5%;
        bottom: -8%;
    }

</style>