<?php


class AccountManager extends Model
{
    /*public function getAllAccounts()            //RETOURNE UN ARRAY DE TOUS LES COMPTES (POSSIBLEMENT UTILE POUR LES BARRES DE RECHERCHE)
    {
        $this->getBdd();
        return $this->getAll('users','Account');
    }*/

    public function getAnAccountById($id)
    {
        $fetched = $this->getAllAccounts();
        foreach ($fetched as $_account){
            if($_account["id"] == $id){
                $account = new User($_account);
                return $account;
            }
        }
    }

    public static function getCurrentAccount() {           //RETOURNE SOUS TYPE USER LE COMPTE ACTUELLEMENT CONNECTE
        if(isset($_SESSION['account'])AND !is_null($_SESSION['account'])){
            $account = $_SESSION['account'];
            return $account;

        }
        else{
            $newUser = new User;
            $newUser->manuallyConstruct("Dylan","Bob","a","a","a","a","a","a","a");
            return serialize($newUser);
        }
    }





}