<?php
Mail::formToEmail();
?>

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
            <form action="" method="post">
<<<<<<< HEAD
                <textarea type="text" class="contact_msg" name="Votre_message" placeholder="Votre message..."
                          style="border: 1px solid #66AFFD; color: #66AFFD; width: 95%; height: 75px; padding: 1%; margin-top: 2%";id="contact"></textarea>
                <button type="submit" class="send">
                    <img src="<?=URL?>/images/icone_envoi.png" class="icone_button_contact icone_envoi">
                </button>


=======
                <textarea type="text" class="contact_msg" name="Votre message" placeholder="Your message..." style="border: 1px solid #66AFFD; color: #66AFFD; height: 150px" id="contact"></textarea>
            <?php
           // Connection::sendMail();
            ?>
>>>>>>>  Traduction anglais et espagnol
            </form>

        </div>


        <div class="icones_button_contact">
            <img src="<?=URL?>/images/icone_at.png" class="icone_button_contact icone_at">


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
           
            Mon - Fri | 8pm - apm
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
            <h3 class="txt_about_title">About</h3>
        </div>
        <p class="txt_about" ><strong> What can I do on this web site ?</strong><br>
        You can't get your driver's license and you don't know the cause?
        This site is made for you! We suggest that you perform online tests to highlight the reasons for your failure!<br>
            <strong>Why ?</strong><br>
            You can finally find suitable solutions to obtain your driving license. Driving schools can adapt driving sessions taking into account the technical difficulties of the apprentice.<br>
                
            <strong> How to do?</strong><br>
            You just have to go to a driving school and ask for credentials to access the tests.
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

<?php
/*require_once ('viewFooter.php');*/
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
        cursor: pointer;
    }

    .icone_envoi {
        position: absolute;
        left: -5%;
        bottom: -8%;
        pointer: cursor;
    }

</style>