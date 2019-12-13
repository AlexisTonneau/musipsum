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
            header('Location: '.URL.'fr/account');
        }

        if(isset($_GET['ref']) && $_GET['ref'] === 'password_forget'){
            require_once('fr/views/views_connection/viewPassword.php');
        }

        if(isset($_SESSION['user'])) {

                $account = unserialize($_SESSION['user']);

                if (isset($_GET['ref']) && $_GET['ref'] === 'modify'){
                    $account = AccountManager::checkModify();
                    require_once ('fr/views/views_connection/viewModifyAccount.php');

                }

                elseif($account->getAccountType()==Model::ADMINISTRATOR_USER) {
                   header('Location: '.URL.'fr/administration');
                }
                elseif ($account->getAccountType()==Model::INSTRUCTOR_USER){

                        require_once ('fr/views/views_instructor/viewUsersAdmin.php');

                    }

                else{
                    $account = AccountManager::getCurrentAccountRefresh();
                    require_once('fr/views/views_connection/viewUser.php');

                }

            }


            else {
                if (Connection::checkIP()) {
                    $msg = Connection::connect();

                    if ($msg === 'Connected') {
                        //echo $msg;

                        header('Location: ' . URL . 'fr/account');
                        exit();
                    } elseif ($msg === 'Connected as admin') {

                        header('Location: ' . URL . 'fr/instructor');
                        exit();
                    } elseif ($msg === 'Administration') {
                        header('Location: ' . URL . 'fr/administration');
                    }
                    require_once('fr/views/views_connection/viewConnect.php');
                }
                else{
                    throw new Exception("Vous avez trop de tentatives de connexion aujourd'hui, revenez demain");
                }
            }

        if (isset($_SESSION['id_user'])){
            $_SESSION['id_user'] = null;
        }
        if (isset($_SESSION['id_test'])){
            $_SESSION['id_user'] = null;
        }
        //}

    }


}