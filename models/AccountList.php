<?php

require_once ('C:\wamp64\www\musipsum\models\Model.php');


class AccountList extends Model
{
    public static $all_accounts;

    /**
     * AccountList constructor.
     */



    /**
     * @param mixed $all_accounts
     */
    public static function setAllAccounts()
    {
        self::$all_accounts = (new AccountList)->getAllAccounts();
    }




}