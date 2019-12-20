<?php


class ControllerTest
{

    /**
     * ControllerTest constructor.
     */
    public function __construct()
    {

        if (isset($_SESSION['user'])){
            switch (unserialize($_SESSION['user'])->getAccountType()){

                case 1:
                    if(!isset($_GET['ref'])){   //TODO Make a page for choosing tests
                    require_once 'views/views_admin/viewLaunchTest.php';}
                    elseif ($_GET['ref']==='choose'){
                        require_once 'views/views_test/viewChooseTest.php';
                    }
                    elseif(is_int($_GET['ref'])){
                        if (isset($_GET['search'])) {
                            $id = $_GET['ref'];
                            $test = new Test($id, unserialize($_SESSION['user'])->getId(),TestModel::searchById($_GET['search'])->getId(),true); //TODO Récap de l'url : musipsum/UserId/ModelTestId

                            require_once ('views/views_test/viewAdminStarted.php');
                        }
                        else{
                            require_once 'views/views_test/viewChooseTest.php';
                        }


                    }
                    else{
                        header('Location :'.URL.'test');
                    }

                    break;
                case 0:
                    if (TestManager::checkToken()==0) {

                        require_once('views/views_test/viewWaitLaunch.php');
                    }
                    else {

                        $url_video = TestManager::findVideo(TestManager::checkToken());
                        require_once 'views/views_test/viewTestStarted.php';
                        TestManager::deleteToken();


                    }

            }
        }
        else{
            require_once 'views/views_test/viewNotConnected.php';

        }


    }

}