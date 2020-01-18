<?php


class ControllerTest
{

    /**
     * ControllerTest constructor.
     */
    public function __construct()
    {


        if (isset($_SESSION['user']) && $_SESSION['user']!==null){
            switch (unserialize($_SESSION['user'])->getAccountType()) {

                case 2:
                case 1:
                    if (!isset($_GET['ref'])) {   //TODO Make a page for choosing tests
                        if (!isset($_SESSION['id_user']) || $_SESSION['id_user']===null){
                            $_SESSION['id_test']=null;

                            require_once 'espanol/views/views_instructor/viewLaunchTest.php';
                        }
                        else{
                            if (!isset($_SESSION['id_test']) || $_SESSION['id_test']===null){
                                TestManager::sendModelId();
                                $tests_models = TestModel::getAllModels();
                                require_once ('espanol/views/views_test/viewChooseTest.php');
                            }
                            else{
                                $test = new Test($_SESSION['id_user'], unserialize($_SESSION['user'])->getId(),TestModel::searchById($_SESSION['id_test'])->getId(),true); //TODO Récap de l'url : musipsum/test, mais variables sessions non nulles
                                TestManager::setTestInDB($test);
                                $_SESSION['id_test'] = null;
                                $_SESSION['id_user'] = null;
                                require_once ('espanol/views/views_test/viewAdminStarted.php');
                            }
                        }

                    }
                    else{
                        header('Location :'.URL.'es/test');
                    }

                    break;
                case 0:
                    if (TestManager::checkToken()==0) {

                        require_once('espanol/views/views_test/viewWaitLaunch.php');
                    }
                    else {

                        $url_fr = TestManager::findVideo(TestManager::checkToken());
                        require_once 'espanol/views/views_test/viewTestStarted.php';
                        TestManager::deleteToken();
                    }

            }
        }
        else{
            require_once 'espanol/views/views_test/viewNotConnected.php';

        }

    }

}