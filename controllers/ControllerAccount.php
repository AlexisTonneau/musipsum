<?php


class ControllerAccount
{

    /**
     * ControllerAccount constructor.
     * @throws Exception
     */
    public function __construct()
    {
        if(isset($_GET['ref']) && $_GET['ref'] === 'disconnect'){
            session_destroy();
            header('Location: '.URL.'account');
        }
        if(isset($_SESSION['user'])) {

                $account = unserialize($_SESSION['user']);

                if($account->getAccountType()===Model::ADMINISTRATOR_USER) {
                    //TODO Make a page for admin user
                }
                elseif ($account->getAccountType()==Model::INSTRUCTOR_USER){

                        require_once ('views/views_admin/viewUsersAdmin.php');
                    }
                else{
                    require_once('views/views_connection/viewUser.php');

                }

            }


            else {
                require_once('views/views_connection/viewConnect.php');
            }

    }


}