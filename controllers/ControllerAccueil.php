<?php


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
            $accountType = $this->_accountManager->getAccount()->getAccountType();
            if($accountType == '0') {   // J AI MIS PROVISOIREMENT ZERO EN VALEUR USER LAMBDA, 1 EN ADMIN


            }
        }
    }



}