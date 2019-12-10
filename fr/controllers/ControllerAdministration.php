<?php


class ControllerAdministration
{


    /**
     * ControllerAdministration constructor.
     * @throws Exception
     */
    public function __construct()
    {
        if (isset($_SESSION['user']) && unserialize($_SESSION['user'])->getAccountType()==Model::ADMINISTRATOR_USER){
            //TODO Redirection selon les actions de l'admin
            if (!isset($_GET['ref']) || $_GET['ref']==null){

                require_once('fr/views/views_administration/viewAdmin.php');

            }
            else{
                switch ($_GET['ref']){
                    //TODO  actions de l'admin
                    case 'disconnect':
                        session_destroy();
                        header('Location: '.URL.'fr/accueil');
                        break;
                    case 'search':
                        require_once('fr/views/views_administration/viewAdminResearch.php');
                        break;
                    case 'list-driving-school':
                        if(!isset($_GET['search'])) {
                            require_once('fr/views/views_administration/viewDrivingSchools.php');
                        }
                        else{
                            if ($_GET['search'] === 'delete'){
                                if(isset($_POST['delete'])){
                                    DrivingSchoolManager::deleteDrivingSchool($_POST['delete']);
                                }
                                else{
                                    header('Location: '.URL.'fr/administration/list-driving-school');
                                }
                            }
                        }
                        break;

                    case 'delete-account':
                        if(isset($_POST['delete']) && $_POST['delete']!==null){
                            AccountManager::deleteAccount();
                            header('Location: '.URL.'fr/account');
                        }
                        else{
                            header('Location: '.URL.'fr/account');
                        }
                        break;
                    case 'modify-account':
                        $account = AccountManager::checkModify();
                        require_once 'fr/views/views_connection/viewModifyAccount.php';


                        break;
                    case 'newaccount':
                        require_once('fr/views/views_instructor/viewCreateUser.php');
                        break;
                    case 'modify-driving-school':
                        if (isset($_POST['modify']) && $_POST['modify']!==null) {
                            $ds = DrivingSchoolManager::getDrivingSchoolById($_POST['modify']);
                            require_once('fr/views/views_instructor/viewModifyDrivingSchool.php');
                        }
                        else{
                            header('Location: '.URL.'fr/account');
                        }
                        break;
                    case 'cgu':
                        Administration::checkData();
                        require_once ('fr/views/views_administration/viewModifyCGU.php');
                        break;
                    case 'mentions-legales':
                        Administration::checkData();
                        require_once ('fr/views/views_administration/viewModifyML.php');

                }
            }
        }
        else{
            header('Location: '.URL.'fr/account');
        }
    }
}
