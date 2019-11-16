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
                    //TODO view default user launching test
                    break;
                case 1:
                   require_once 'views/views_admin/viewLaunchTest.php';
                    break;
            }
        }
        else{
            //TODO Make a view for non-connected launching test
        }
    }
}