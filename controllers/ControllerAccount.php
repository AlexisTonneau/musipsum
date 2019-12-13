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

        if(isset($_GET['ref']) && $_GET['ref'] === 'password_forget'){
            require_once('views/views_connection/viewPassword.php');
        }

        if(isset($_SESSION['user'])) {

                $account = unserialize($_SESSION['user']);
                if (isset($_GET['ref']) && $_GET['ref'] === 'modify'){
                    $account = AccountManager::checkModify();
                    require_once ('views/views_connection/viewModifyAccount.php');
                }

                elseif($account->getAccountType()==Model::ADMINISTRATOR_USER) {
                   header('Location: '.URL.'administration');
                }
                elseif ($account->getAccountType()==Model::INSTRUCTOR_USER){

                        require_once('views/views_instructor/viewUsersAdmin.php');
                    }
                else{
                    $account = AccountManager::getCurrentAccountRefresh();
                    require_once('views/views_connection/viewUser.php');

                }

            }


            else {
                $msg = Connection::connect();
                $_SESSION['flash'] = $msg;

                if ($msg === 'Connected') {
                    //echo $msg;

                    header('Location: '.URL.'account');
                    exit();
                } elseif ($msg === 'Connected as admin') {

                    header('Location: '.URL.'instructor');
                    exit();
                }
                elseif ($msg ==='Administration'){
                    header('Location: '.URL.'administration');
                }
                $_SESSION['flash']="";
                require_once('views/views_connection/viewConnect.php');
            }

    }


}