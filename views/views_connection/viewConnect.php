<?php   //TODO Page de connexion simple
session_start();
$a = "abcdef";
require_once ('C:\wamp64\www\musipsum\models\AccountList.php');
require_once ('\wamp64\www\musipsum\models\User.php');
$accountList = new AccountList();
$accountList::setAllAccounts();
$accounts = $accountList->getAllAccounts();
//debug($accounts[0]);
//echo "Le premier nom est : " . $accounts[0]->getNom();

//debug($accountList->getAllAccounts());





//TODO Formulaire vers ControllerAccount.php
?>

<style
    <?php
require_once ('C:\wamp64\www\musipsum\views\se_connecter.php');
?>
</style
<?php
$msg="";
$boole = false;
/*if(isset($_POST['mail'])&&isset($_POST['mdp'])&& !is_null($_POST['mail']) && !is_null($_POST['mdp'])){
    if(filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)&&strlen($_POST['mdp'])>=0){
        if (!is_null($accounts)) {
            for($i=0;$i<sizeof($accounts);$i++){
                if($accounts[$i]->getMailAddress()==$_POST['mail']&& $accounts[$i]->getPassword()==$_POST['mdp']){
                    $msg = '</br></br>'."Connecté !".'</br></br>';
                    $boole = true;
                    header('index.php?url=account');

                }
            }
            if (!$boole){
                $msg = 'Mail ou mot de passe incorrect';
            }
        }
    }
    else{
        $msg = "Mail ou mot de passe incorrect";
    }
}*/

?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="utf-8">
    <link rel="stylesheet"  href="C:\wamp64\www\musipsum\views\se_connecter.php">
    <title>Connexion</title>

</head>

<body class="body">
<header class="titlebar">
    <div class="title_bar" id="title_bar" >
        <!--<p>--><img width="37px" length="37px" class="img logo_mus" src="C:\wamp64\www\musipsum\images\logo_musipsum.png" alt="logo"><!--</p>-->
        <!--<p class="title_txt" >Musipsum</p>-->
        <div class="nav_bar" >
            <a class="btn btn_header musipsum" href="welcome.html">Musipsum</a>
            <a class="btn btn_header a_propos_header" href="about_us.html" >À propos</a>
            <a class="btn btn_header sucess_stories" href="success_stories.html" >Success Story</a>
            <a class="btn btn_header nous_contacter">Nous contacter</a>
            <a class="btn btn_header start_test">Démarrer le test</a>
            <a class="btn btn_header connexion">Connexion</a>
        </div>
    </div>
</header>
<div class="middlepage">
    <div>
        <!--<p>--><img class="image_flottante" src="C:\wamp64\www\musipsum\images\carrésbleus.png" alt="double carré" align=center"><!--<p>-->
    </div>

    <div aligne="center">
        <!--<p>--><img class="bonhomme" src="C:\wamp64\www\musipsum\images\utilisateur.png" alt="portrait"><!--<p>-->

    </div>




    <div class="Connexion">
        Connexion
    </div>

    <div class="mdp_oubli">
        Mot de passe oublié ?
    </div>

    <form class="mail" action="<?php if ($boole){echo 'C:\wamp64\www\musipsum\index.php';} ?>" method="post">

        <div>
            <input type="text" name="mail" placeholder="Adresse mail" class="id_mail">
        </div>
        <div>
            <input type="password" name="mdp" placeholder="Mot de passe" class="id_mdp">
        </div>
        <div>
            <!--<p>--><input  class ="flèche" src="C:\wamp64\www\musipsum\images\flèchebleu.png" type="submit" alt="flèche"><!--<p>-->

        </div>
    </form>

    </div>


</div>

</body>
</html>

