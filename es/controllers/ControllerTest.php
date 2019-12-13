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
                case 0:
                    require_once 'es/views/views_admin/viewLaunchTest.php';
                    break;
                case 1:
                   require_once 'es/views/views_admin/viewLaunchTest.php';     //TODO switch pages when they will be made
                    break;
            }
        }
        else{
            require_once 'es/views/views_admin/viewLaunchTest.php';

        }
    }
}