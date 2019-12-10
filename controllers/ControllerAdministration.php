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

                require_once('views/views_administration/viewAdmin.php');

            }
            else{
                switch ($_GET['ref']){
                    //TODO  actions de l'admin
                    case 'search':
                        require_once('views/views_administration/viewAdminResearch.php');
                        break;
                    case 'list-driving-school':
                        if(!isset($_GET['search'])) {
                            require_once('views/views_administration/viewDrivingSchools.php');
                        }
                        else{
                            if ($_GET['search'] === 'delete'){
                                if(isset($_POST['delete'])){
                                    DrivingSchoolManager::deleteDrivingSchool($_POST['delete']);
                                }
                                else{
                                    header('Location: '.URL.'administration/list-driving-school');
                                }
                            }
                        }
                        break;

                    case 'delete-account':
                        if(isset($_POST['delete']) && $_POST['delete']!==null){
                            AccountManager::deleteAccount();
                            header('Location: '.URL.'account');
                        }
                        else{
                            header('Location: '.URL.'account');
                        }
                        break;
                    case 'modify-account':
                        $account = AccountManager::checkModify();
                        require_once 'views/views_connection/viewModifyAccount.php';


                        break;

                }
            }
        }
        else{
            header('Location: '.URL.'account');
        }
    }
}
