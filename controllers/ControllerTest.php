<?php
//TODO Delete session variables anywhere

class ControllerTest
{

    /**
     * ControllerTest constructor.
     */
    public function __construct()
    {

        if (isset($_SESSION['user']) && $_SESSION['user']!==null){
            switch (unserialize($_SESSION['user'])->getAccountType()) {

                case 1:
                    if (!isset($_GET['ref'])) {   //TODO Make a page for choosing tests
                        if (!isset($_SESSION['id_user']) || $_SESSION['id_user']===null){
                            require_once 'views/views_admin/viewLaunchTest.php';
                        }
                        else{
                            if (!isset($_SESSION['id_test']) || $_SESSION['id_test']===null){
                                require_once ('views/views_test/viewChooseTest.php');
                            }
                            else{
                                $test = new Test($_SESSION['id_user'], unserialize($_SESSION['user'])->getId(),TestModel::searchById($_SESSION['id_test'])->getId(),true); //TODO Récap de l'url : musipsum/test, mais variables sessions non nulles
                                TestManager::setTestInDB($test);
                                require_once ('views/views_test/viewAdminStarted.php');
                            }
                        }
                    }
                    elseif ($_GET['ref']==='choose'){
                        require_once 'views/views_test/viewChooseTest.php';
                    }
                    else{
                        header('Location :'.URL.'test');
                    }
                    break;
                case 0:
                    if (TestManager::checkToken()===0) {

                        require_once('views/views_test/viewWaitLaunch.php');
                    }
                    else {
                        $_SESSION['url']=TestManager::checkToken();
                        TestManager::deleteToken();
                        require_once 'views/views_test/viewTestStarted.php';


                    }

            }
        }
        else{
            require_once 'views/views_test/viewNotConnected.php';

        }

    }

}