<?php

//session_start();


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
                    require_once ('views/views_accueil/viewAPropos.php');
                    break;
                case "successstories":
                    require_once ('views/views_accueil/viewSuccessStories.php');
                    break;
                case "faq":
                    require_once ('views/views_accueil/viewFAQ.php');
                    break;

            }
        }
        else {

                require_once("views/views_accueil/viewAccueil.php");

            }


        //}
    }




}