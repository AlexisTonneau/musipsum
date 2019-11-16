<?php


class ControllerAdminaccount
{

    /**
     * ControllerAdminaccount constructor.
     */
    public function __construct()
    {

        if (isset($_SESSION['user']) && unserialize($_SESSION['user'])->getAccountType()==1){
            if (isset($_GET['ref'])) {
                switch ($_GET['ref']){   //TODO Modify buttons of the page @DEMARS
                    case "newaccount":
                        require ("views/views_admin/viewCreateUser.php");
                        break;
                    case "handlecaptor":
                        require_once ("views/views_admin/viewHandleCaptors.php");
                        break;
                    case "disconnect":
                        session_destroy();
                        header("index.php");
                        exit();
                        break;
                    default:
                        header('Location: '.URL.'adminaccount');

                        break;
                }
            }
            else{
                require ("views/views_admin/viewUsersAdmin.php");
            }
        }
        else{
            header('Location: '.URL);
        }
    }
}