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
                    require_once ('models/TestManager.php');
                    }
                    break;
            }
        }
    }
}