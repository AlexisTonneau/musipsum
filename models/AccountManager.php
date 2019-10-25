<?php


class AccountManager extends Model
{
    public function getAllAccounts()            //RETOURNE
    {
        $this->getBdd();
        return $this->getAll('user','Account');
    }

    public function getAnAccountById($id)
    {
        $fetched = $this->getAllAccounts();
        foreach ($fetched as $_account){
            if($_account->id() == $id){
                $account = new User($_account);
                return $account;
            }
        }
    }
}