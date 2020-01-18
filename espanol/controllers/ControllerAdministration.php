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

                require_once('espanol/views/views_administration/viewAdmin.php');

            }
            else{
                switch ($_GET['ref']){
                    //TODO  actions de l'admin
                    case 'disconnect':
                        session_destroy();
                        header('Location: '.URL.'es/accueil');
                        break;
                    case 'search':
                        require_once('espanol/views/views_administration/viewAdminResearch.php');
                        break;
                    case 'list-driving-school':
                        if(!isset($_GET['search'])) {
                            require_once('espanol/views/views_administration/viewDrivingSchools.php');
                        }
                        else{
                            if ($_GET['search'] === 'delete'){
                                if(isset($_POST['delete'])){
                                    DrivingSchoolManager::deleteDrivingSchool($_POST['delete']);
                                }
                                else{
                                    header('Location: '.URL.'es/administration/list-driving-school');
                                }
                            }
                        }
                        break;

                    case 'delete-account':
                        if(isset($_POST['delete']) && $_POST['delete']!==null){
                            AccountManager::deleteAccount();
                            header('Location: '.URL.'es/account');
                        }
                        else{
                            header('Location: '.URL.'es/account');
                        }
                        break;
                    case 'modify-account':
                        $account = AccountManager::checkModify();
                        require_once 'espanol/views/views_connection/viewModifyAccount.php';


                        break;
                    case 'newaccount':
                        require_once('espanol/views/views_instructor/viewCreateUser.php');
                        break;
                    case 'modify-driving-school':
                        if (isset($_POST['modify']) && $_POST['modify']!==null) {
                            $ds = DrivingSchoolManager::getDrivingSchoolById($_POST['modify']);
                            require_once('espanol/views/views_instructor/viewModifyDrivingSchool.php');
                        }
                        else{
                            header('Location: '.URL.'es/account');
                        }
                        break;
                    case 'cgu':
                        Administration::checkData();
                        require_once ('espanol/views/views_administration/viewModifyCGU.php');
                        break;
                    case 'mentions-legales':
                        Administration::checkData();
                        require_once ('espanol/views/views_administration/viewModifyML.php');
                        break;
                    case 'faq':
                        if(!isset($_GET['search'])) {
                            Faq::newFaq();
                            $faq = Faq::getFaq();
                            require_once('espanol/views/views_administration/viewModifyFAQ.php');
                        }
                        else{
                            Faq::deleteFaq($_GET['search']);
                            header('Location: '.URL.'es/administration/faq');
                        }
                        break;
                    default:
                        header('Location: '.URL.'es/administration');
                        break;


                }
            }
        }
        else{
            header('Location: '.URL.'es/account');
        }
    }
}
