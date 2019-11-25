<?php

require_once 'C:\wamp64\www\musipsum\models\Model.php';
require_once 'C:\wamp64\www\musipsum\models\User.php';


    $first_namePost= $_GET['user'];
    $allAccounts = Model::getAllAccounts();
 //print_r ($allAccounts);
 
foreach ( $allAccounts as $account)
{ 
    if ($account->getFirstName()==$first_namePost)
    {
        ?><form  method='post'action=  >
        <input type"submit" name="envoyer" value="envoyer" onclick="afficher();">
        </form> <?php
        echo '<br/>'.$account->getFirstName();
        echo ' '.$account->getName();
    }
}