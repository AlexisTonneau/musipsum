<?php


class ControllerInstructor
{

    /**
     * ControllerInstructor constructor.
     */
    public function __construct()
    {

        if (isset($_SESSION['user']) && unserialize($_SESSION['user'])->getAccountType()==1){
            if (isset($_GET['ref'])) {
                switch ($_GET['ref']){   //TODO Modify buttons of the page @DEMARS
                    case 'newaccount':
                        require('fr/views/views_instructor/viewCreateUser.php');
                        break;
                    case 'handlecaptor':
                        require_once('fr/views/views_instructor/viewHandleCaptors.php');
                        break;
                    case 'disconnect':
                        session_destroy();
                        header('Location: ' .URL.'fr');
                        exit();
                        break;
                    case 'modify-drivingschool':
                        $ds = DrivingSchoolManager::getCurrentDrivingSchool(); //A adapter pour les admins
                        DrivingSchoolManager::checkDrivingSchool();
                        require_once('fr/views/views_instructor/viewModifyDrivingSchool.php');
                        break;
                    case 'search':
                        if(isset($_POST['launch']) && ctype_digit($_POST['launch'])){
                            $_SESSION['id_user'] = (int)$_POST['launch'];
                            header('Location: '.URL.'fr/test');
                        }
                        elseif (isset($_POST['modify'])){
                            require_once ('fr/views/views_connection/viewModifyAccount.php');
                        }
                        else {
                            require_once('fr/views/views_instructor/viewUsersResearch.php');

                        }
                        break;
                    default:
                        header('Location: '.URL.'fr/instructor');

                        break;
                }
            }
            else{
                require('fr/views/views_instructor/viewUsersAdmin.php');
            }
        }
        else{
            header('Location: '.URL.'fr');
        }
    }
}