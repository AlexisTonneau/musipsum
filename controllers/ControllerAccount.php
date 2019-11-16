<?php


class ControllerAccount
{

    /**
     * ControllerAccount constructor.
     * @throws Exception
     */
    public function __construct($url)
    {
        /*if(isset($url)&&count($url)>1){
            throw new Exception('Page introuvable');
        }
        else{*/
            if(isset($_SESSION['user'])) {
                $account = unserialize($_SESSION['user']);
                if($account->getAccountType()==Model::REGULAR_USER) {
                    require('views/views_connection/viewUser.php');
                }
                elseif ($account->getAccountType()==Model::ADMIN_USER){
                    if(isset($_GET['register'])&&$_GET['register']==true){
                        require ('views/views_admin/viewCreateUser.php');

                    }
                    else{
                        require ('views/views_admin/viewUsersAdmin.php');
                    }
                }
            }

            else {
                require('views/views_connection/viewConnect.php');
            }
        //}
    }


}