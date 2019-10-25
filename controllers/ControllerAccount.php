<?php

/*if(isset($_SESSION['name'])&&$_SESSION['name']!=null) {
    require_once('views/viewUser.php');
}
else{
    require_once ('views/viewConnect.php');
}*/


class ControllerAccount
{

    /**
     * ControllerAccount constructor.
     * @throws Exception
     */
    public function __construct($url)
    {
        if(isset($url)&&count($url)>1){
            throw new Exception('Page introuvable');
        }
        else{
            if(isset($_SESSION['account'])) {
                $account = unserialize($_SESSION['account']);
                require_once('views/viewUser.php');
            }
            else if(isset($_SESSION['register'])&&$_SESSION['register']==true){                      //Ne pas oublier de delete la variable session après le register
                require_once ('controllers/ControllerRegister.php');        //Pq pas recréer un autre controller ?
            }
            else {
                require_once ('views/viewConnect.php');
            }
        }
    }


}