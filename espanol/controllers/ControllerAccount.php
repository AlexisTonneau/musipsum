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
            header('Location: '.URL.'es/account');
        }

        if(isset($_GET['ref']) && $_GET['ref'] === 'password_forget'){
            require_once('espanol/views/views_connection/viewPassword.php');
        }

        if(isset($_SESSION['user'])) {

                $account = unserialize($_SESSION['user']);

                if (isset($_GET['ref']) && $_GET['ref'] === 'modify'){
                    $account = AccountManager::checkModify();
                    require_once ('espanol/views/views_connection/viewModifyAccount.php');

                }

                elseif($account->getAccountType()==Model::ADMINISTRATOR_USER) {
                   header('Location: '.URL.'es/administration');
                }
                elseif ($account->getAccountType()==Model::INSTRUCTOR_USER){

                        require_once('espanol/views/views_instructor/viewUsersAdmin.php');

                    }

                else{
                    $account = AccountManager::getCurrentAccountRefresh();
                    if (isset($_GET['ref']) && $_GET['ref'] === 'stat' ){
                        if(!isset($_GET['search'])){
                            $tests_account = TestManager::getAllTestsUser();
                            require_once ('espanol/views/views_user/viewChooseTest.php');
                        }
                        else {
                            $test_searched = TestManager::searchById($_GET['search']);
                            require_once('espanol/views/views_user/viewGraphs.php');
                        }
                    }
                    else {
                        require_once('espanol/views/views_connection/viewUser.php');
                    }
                }

            }


            else {
                if (Connection::checkIP()) {
                    $msg = Connection::connect();

                    if ($msg === 'Connected') {
                        //echo $msg;

                        header('Location: ' . URL . 'es/account');
                        exit();
                    } elseif ($msg === 'Connected as admin') {

                        header('Location: ' . URL . 'es/instructor');
                        exit();
                    } elseif ($msg === 'Administration') {
                        header('Location: ' . URL . 'es/administration');
                    }
                    require_once('espanol/views/views_connection/viewConnect.php');
                }
                else{
                    throw new Exception("Tienes demasiados intentos de conexión hoy, vuelve mañana");
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