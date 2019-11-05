<?php
require( 'views/views_admin/viewCreateUser.php');


class ControllerRegister
{

    /**
     * ControllerRegister constructor.
     */
    public function __construct()
    {

    }

    private function registerControl()
    {
        if (isset($_POST['name'])&&isset($_POST['surname'])&&isset($_POST['mail address'])){
            $user = new User;
            $user->manuallyConstruct($_POST['name'],$_POST['surname'],$_POST['mail address'],$_POST['gender'],$_POST['year birth'],$_POST['month birth'],$_POST['day birth'],$_POST['height'],$_POST['weight']);
            Register::registration($user);

        }
        else{
            require( 'views/views_admin/viewCreateUser.php');
        }

    }
}