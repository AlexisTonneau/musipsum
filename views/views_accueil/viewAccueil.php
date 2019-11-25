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
    <script type="text/javascript" src="<?=URL?>/js/welcome.js"></script>
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
        <img src="<?=URL?>/images/slide_1.png" class="img img_carrousel_1" style="width: 100%" alt="">
        <div class="carrousel_text carrousel_text_1">Texte pour la premiere slide</div>
    </div>

    <div class="slide passage">
        <img src="<?=URL?>/images/slide_2.jpg" class="img img_carrousel_2" style="width: 100%" alt="">
        <div class="carrousel_text carrousel_text_2">Texte pour la deuxieme slide</div>
    </div>

    <div class="slide passage">
        <img src="<?=URL?>/images/slide_3.png" class="img img_carrousel_3" style="width: 100%" alt="">
        <div class="carrousel_text carrousel_text_3">Texte pour la troisieme slide</div>
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

    <div class="nous_contacter">
        <div class="social_network">
            <img src="<?=URL?>/images/logo_facebook.png" class="img_contact img_contact_fb" alt="facebook">
            <img src="<?=URL?>/images/logo_twitter.png" class="img_contact img_contact_twi" alt="twitter">
            <img src="<?=URL?>/images/logo_instagram.png" class="img_contact img_contact_ig" alt="instagram">
            <img src="<?=URL?>/images/logo_linkedin.png" class="img_contact img_contact_li" alt="linkedin">

            <!--<img src="images/.png" alt="">
            <img src="images/.png" alt="">-->
        </div>
        <div class="box_mail">
            <input type="text" class="contact_msg" name="Votre message" placeholder="Votre message..." style="border: 1px solid #66AFFD; color: #66AFFD;" id="contact">
            <?php
            //TODO Envoyer un mail (peut-étre rajouter un champ pour rentrer son email)
            ?>
        </div>


        <div class="icones_button_contact">
            <img src="<?=URL?>/images/icone_at.png" class="icone_button_contact icone_at">
            <img src="<?=URL?>/images/icone_envoi.png" class="icone_button_contact icone_envoi">
        </div>


        <div class="icones_contact">

        </div>
        <div class="" ></div>
    </div>



    <div class="contact" >


        <p class="adresse_img">
            <img src="<?=URL?>images/icone_batiment.png" alt="adresse">
            <!--<p class="text contact_txt adresse_txt">-->28 rue Notre dame des champs 75006 Paris<!--</p>-->
        </p>

        <p class="horaires_img">
            <img src="<?=URL?>/images/icone_horloge.png" alt="horloge">
            <!--</p>-->
            <!--<p class="text contact_txt horaires_txt">-->
            Lun - Ven | 8:00 - 18:00
        </p>

        <p class="telephone_img">
            <img src="<?=URL?>/images/icone_telephone.png" alt="telephone">
            <!--</p>-->

            <!--<p class="text contact_txt n_tel">-->
            +33 8 85 47 12 65
        </p>


    </div>

    <div class="about_footer" >
        <div class="footer_about_title">
            <h3 class="txt_about_title">A propos</h3>
        </div>
        <p class="txt_about" >Que faire sur ce site ?<br>
            Vous n’arrivez pas à décrocher votre permis de conduire et n’en connaissez pas la cause ?<br> Ce site est fait pour vous !
            Nous vous proposons d’effectuer des tests en ligne permettant de mettre en avant les raisons de votre échec !<br>
            Pourquoi ?<br>
            Vous pouvez enfin trouver des solutions adaptées pour obtenir votre permis de conduire.
            Les auto-écoles peuvent adapter des séances de conduite en tenant compte des difficultés techniques de l’apprenti.<br>
            Comment faire ?<br>
            Il vous suffit de vous présenter dans une auto-école et de demander des identifiants pour accéder aux tests.</p>
    </div>




    <!--<div class="A_propos">

        <button class="btn a_propos_footer">A propos</button>
        <p class="A_propos">

        </p>

    </div>-->


</footer>

<script type="text/javascript" src="<?=URL?>/js/carrousel.js"></script>

</body>
</html>
