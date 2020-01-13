<?php


class ControllerAccueil
{
    protected $_accountManager;
    private $_view;

    /**
     * ControllerAccueil constructor.
     */
    public function __construct()
    {
        if(isset($_SESSION['url'])){    //Seul moyen que j'ai trouvé pour l'instant pour supprimer l'url de la vidéo.
            $_SESSION['url']=null;
        }
        if(isset($_GET['ref'])){
            switch ($_GET['ref']){
                case "about":
                    require_once ('espanol/views/views_accueil/viewAPropos.php');
                    break;
                case "successstories":
                    require_once ('espanol/views/views_accueil/viewSuccessStories.php');
                    break;
                case "faq":
                    require_once ('espanol/views/views_accueil/viewFAQ.php');
                    break;
                case "cgu":
                    $page = "cgu";
                    $titre = "Conditions générales d'utilisation";
                    require_once('espanol/views/views_accueil/viewLegal.php');
                    break;
                case "mentions-legales":
                    $page = "m-l";
                    $titre = "Mentions légales";
                    require_once('espanol/views/views_accueil/viewLegal.php');
                    break;

            }
        }
        else {

                require_once("espanol/views/views_accueil/viewAccueil.php");

            }
        if (isset($_SESSION['id_user'])){
            $_SESSION['id_user'] = null;
        }
        if (isset($_SESSION['id_test'])){
            $_SESSION['id_user'] = null;
        }




        //}
    }






}