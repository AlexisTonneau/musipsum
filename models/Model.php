<?php

function debug($var){
    echo '<pre>'.print_r($var,true).'<pre>';
}




abstract class Model
{
    const REGULAR_USER= 0;

    const ADMIN_USER = 1;


    private static $_bdd;




    /**
     * @param mixed $bdd
     */
    private static function setBdd($bdd)
    {
        try {
            self::$_bdd = new PDO('mysql:host=127.0.0.1;dbname=musipsum;charset=utf8', 'root', '');
            self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }catch (Exception $e){
            echo 'Connexion échouée';
        }
    }

    /**
     * @return mixed
     */
    public static function getBdd()
    {
        if(self::$_bdd==null){
            self::setBdd(self::$_bdd);
        }
        return self::$_bdd;
    }

    public static function getAll($table,$id, $obj){
        $var = [];
        $i = 0;
        $req = self::getBdd()->prepare('SELECT * FROM '.$table.' ORDER BY '.$id.' DESC');   //TODO Attention au nom de l'id
        $req->execute();
        while ($data=$req->fetch(PDO::FETCH_ASSOC)){

            $var[$i] = new $obj($data);
            $i++;
        }
        $req-> closeCursor();

        return $var;
    }
    public function getAllAccounts()            //RETOURNE UN ARRAY DE TOUS LES COMPTES (POSSIBLEMENT UTILE POUR LES BARRES DE RECHERCHE)
    {
        $bdd= $this->getBdd();
        $i=0;
        $req = $bdd->prepare('SELECT * FROM user ');
        if(!$req->execute()){
            throw new Exception("Connexion impossible");
        }
        while ($account = $req->fetch(PDO::FETCH_ASSOC)){
            $var[$i] = new User;
            $var[$i]->setName($account['name']) ;
            $var[$i]->setId($account['id_user']);
            $var[$i]->setFirstName($account['first_name']);
            $var[$i]->setHeight($account['height']);
            $var[$i]->setWeight($account['weight']);
            $var[$i]->setPassword($account['password_account']);
            $var[$i]->setGender($account['gender']);
            $var[$i]->setAccountType($account['account_type']);
            $var[$i]->setMailAddress($account['mail_address']);


            $i++;
        }
        return $var;

    }

    public static function getCurrentAccount(){           //RETOURNE SOUS TYPE USER LE COMPTE ACTUELLEMENT CONNECTE
        if(isset($_SESSION['user'])AND $_SESSION['user'] !== null){
            $account = unserialize($_SESSION['user']);
            return $account;

        }
        else{
            return null;
        }
    }



}