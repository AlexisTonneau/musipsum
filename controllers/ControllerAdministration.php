<?php


class ControllerAdministration
{


    /**
     * ControllerAdministration constructor.
     */
    public function __construct()
    {
        if (isset($_SESSION['user']) && unserialize($_SESSION['user'])->getAccountType()==Model::ADMINISTRATOR_USER){
            //TODO Redirection selon les actions de l'admin
            if (!isset($_GET['ref']) || $_GET['ref']==null){
                require_once ('views/views_admin/viewAdmin.php');
            }
            else{
                switch ($_GET['ref']){
                    //TODO  actions de l'admin
                    case 'search':
                        if(!isset($_POST['modify'])) {
                            require_once('views/views_instructor/viewUsersResearch.php');
                        }
                        else{
                            require_once ('views/views_connection/viewModifyAccount.php');
                        }
                        break;
                    case 'list-driving-school':
                        require_once ('views/views_admin/viewDrivingSchools.php');
                        break;
                }
            }
        }
        else{
            header('Location: '.URL.'account');
        }
    }
}