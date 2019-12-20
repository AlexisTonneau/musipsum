<!DOCTYPE html>
<html>
<<<<<<< HEAD
<head>
    <head>
        <meta charset="utf-8" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="<?=URL?>/css/FAQ/faq.css">
        <title>Musipsum - FAQ</title>
        <style>
            body{
                margin: 80px auto;
                background: #ffffff
            }
        </style>
    </head>
=======
  <head>
<head>
	<meta charset="utf-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?=URL?>/css/FAQ/faq.css">
	<title>Musipsum - FAQ</title>
	<style>
		body{
			margin: 80px auto;
			background: #ffffff 
		}
	</style>	
</head>
>>>>>>> ded3f9b8e73b4bcc7110b20a305d35c4d3a57254

<body>

<?php
require_once 'viewHeader.php';
?>
<div class="center-div">
<<<<<<< HEAD
    <h1>
        Bienvenue dans la FAQ de Vahmat : Musipsum
    </h1>

    <section class="faq-section">
        <input type="checkbox" id="q1">
        <label for="q1">Qui sommes nous ?</label>
        <p>Nous sommes la société Vahmat en association avec votre autoécole dans le but de vous proposer la solution Musipsum.
        </p>
    </section>

    <section class="faq-section">
        <input type="checkbox" id="q2">
        <label for="q2">Qu'est Musipsum ?</label>
        <p>Musipsum est un objet connecté dans le cadre d'identification des causes d'échec de l'utilisateur lors de son permis de conduire. Grâce à Musipsum, vous allez enfin comprendre ce qui vous bloque dans l'obtention de votre permis de conduire ! A l'issu de différents tests, vous allez pouvoir constater différentes statistiques que vous pourrez interpréter.</p>
    </section>

    <section class="faq-section">
        <input type="checkbox" id="q3">
        <label for="q3">Quels genre de test puis-je effectuer sur ce site ?</label>
        <p>Il existe plusieurs tests afin de voir vos différentes capacités. Il y a des tests de reflexes où on vous demandera de réagir de façon efficace et rapide, il y a aussi des tests de couleurs, afin que vous puissiez prouver que vous n'avez aucune lacune sur ce point, il y a aussi des tests de mémoire : nous devons nous assurer que vous connaissez parfaitement votre code de la route.</p>
    </section>

    <section class="faq-section">
        <input type="checkbox" id="q4">
        <label for="q4">Mon Auto-école pourra-t-elle suivre mon avancée ?</label>
        <p>Parfaitement ! L'autoécole a un contrôle complet sur votre programme afin qu'elle puisse constater ce qui vous empêche d'avoir votre permis. N'hésitez pas à faire des bilans avec elle !</p>
    </section>

    <section class="faq-section">
        <input type="checkbox" id="q5">
        <label for="q5">Comment me procurer Musipsum ?</label>
        <p>Il suffit tout simplement d'aller voir votre Auto-école partenaire et vous aurez toutes les informations nécessaires !</p>
    </section>


    <section class="faq-section">
        <input type="checkbox" id="q6">
        <label for="q6">Comment puis-je vous contacter ?</label>
        <p>Vous pouvez nous contacter sur plusieurs réseaux sociaux tels que Facebook Twitter et Youtube, mais aussi par mail à l'adresse suivante : contactmusipsum@gmail.com</p>
    </section>

</div>

</body>

<?php
require_once ('viewFooter.php');
?>
</html>