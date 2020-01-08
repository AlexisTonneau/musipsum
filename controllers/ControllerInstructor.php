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
                switch ($_GET['ref']) {   //TODO Modify buttons of the page @DEMARS
                    case 'newaccount':

                        require('espanol/views/views_admin/viewCreateUser.php');
                        break;
                    case 'handlecaptor':
                        require_once('espanol/views/views_admin/viewHandleCaptors.php');
                        break;
                    case 'disconnect':
                        session_destroy();
                        header('Location: ' . URL);
                        exit();
                        break;
                    case 'modify-drivingschool':
                        $ds = DrivingSchoolManager::getCurrentDrivingSchool(); //A adapter pour les admins
                        DrivingSchoolManager::checkDrivingSchool();
                }}}}}
