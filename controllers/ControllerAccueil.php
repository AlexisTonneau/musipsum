<?php
require_once ("views/views_accueil/viewAccueil.php");


class ControllerAccueil
{
    protected $_accountManager;
    private $_view;

    /**
     * ControllerAccueil constructor.
     */
    public function __construct($url)
    {
        if(isset($url)&&count($url)>1) {
            throw new Exception('Page introuvable');
        }
        else{

            if(isset($_SESSION['account_type'])AND !is_null($_SESSION['account_type'])){
                if ($_SESSION['account_type']==1){
                    //TODO Differences btw reg and admin, admin here
                    //Peut-être à virer

                }
                else {
                    //TODO Same, here regular

                }


            }
            else{

            }

        }
    }




}