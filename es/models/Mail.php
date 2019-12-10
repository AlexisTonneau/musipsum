<?php


class Mail
{
    public static function sendMail():bool {
        if(!isset($_POST['Votre message']) || $_POST['Votre message']!==null){  //TODO Certainement une erreur dans le nom du $_POST
            return false;
        }

        $message = $_POST['Votre message'];
        if(!mail("vahmatmusipsum@gmail.com","Nous contacter",$message)){
            throw new Exception("Cannot send email");
        }

        return true;


    }

}