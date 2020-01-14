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

    public static function formToEmail () {
        $to = 'contactmusipsum@gmail.com';
        $subject = 'Nous contacter de musipsum';
        if (isset($_POST['Votre_message']) && $_POST['Votre_message'] != 'Votre message...') {
            //echo "test";
            $message = $_POST['Votre_message'];
            mail($to, $subject, $message);
        }
    }


    public static function formEmail () {
        $awardspaceEmail = "vamathg4c@gmail.com";
        $recipientEmail = "contactmusipsum@gmail.com";

        $from = "From: Mail Contact Form <" . $awardspaceEmail . ">";
        $to = $recipientEmail;

        $subject = "PHP mail() Test";

        $body = "This is a test message sent with the PHP mail function!";

        if(mail($to,$subject,$body,$from)){
            echo 'E-mail message sent!';
        } else {
            echo 'E-mail delivery failure!';
        }
    }

}