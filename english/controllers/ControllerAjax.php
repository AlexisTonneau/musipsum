<?php

/**
 * Class ControllerAjax Classe pour gérer les requêtes AJAX
 */
class ControllerAjax
{

    /**
     * ControllerAjax constructor.
     */
    public function __construct()
    {
        if(isset($_GET['ref'])){
            switch ($_GET['ref']){
                case 'graph':
                    if (isset($_GET['search']) ){
                    require_once ('francais/models/TestManager.php');
                    }
                    break;
                case 'connection':
                    if (Connection::checkIP()) {
                        require_once('english/models/Connection.php');
                    }
                    else{
                        throw new Exception("Vous avez trop de tentatives de connexion aujourd'hui, essayez demain !");
                    }
            }
        }
    }
}