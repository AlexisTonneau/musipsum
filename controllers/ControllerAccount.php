<?php
require_once ('views/ViewUser.php');


class ControllerAccount
{
    private $_accountManager;
    private $_view;

    /**
     * ControllerAccount constructor.
     */
    public function __construct($url)
    {
        if(isset($url)&&count($url)>1){
            throw new Exception('Page introuvable');
        }
        else{
            $this->_accountManager = new AccountManager;
            $account = $this->_accountManager->getAccounts();


        }
    }


}