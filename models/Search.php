<?php


class Search extends Model
{
    private $bdd;
    private $output;

    public static function querySearch($text)
    {
        $user = self::getCurrentAccount();
        $bdd = self::getBdd();
        $i=0;

        $req = $bdd->prepare("SELECT * FROM user WHERE (name LIKE '%$text%' OR first_name LIKE '%$text%') AND id_autoecole = " . $user->getDrivingSchoolId());
        if(!$req->execute()){
            throw new Exception("Cannot connect to database");
        }
        while ($account = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[$i] = new User;
            $var[$i]->setName($account['name']);
            $var[$i]->setId($account['id_user']);
            $var[$i]->setFirstName($account['first_name']);
            $var[$i]->setHeight($account['height']);
            $var[$i]->setWeight($account['weight']);
            $var[$i]->setPassword($account['password_account']);
            //$var[$i]->setPassword(password_verify($account['password_account'],PASSWORD_BCRYPT));
            $var[$i]->setGender($account['gender']);
            $var[$i]->setAccountType($account['account_type']);
            $var[$i]->setMailAddress($account['mail_address']);
            $var[$i]->setDrivingSchoolId($account['id_autoecole']);


            $i++;
        }
        return $var;
    }
    public static function initializeSearch(){
        if (!isset($_GET['search'])){
            if(isset($_POST['search'])){
                header('Location: '.URL.'adminaccount/search/'.$_POST['search']);
                return null;
            }
            else {
                throw new Exception("You're lost...");
            }
        }
        $post= $_GET['search'];
        return self::querySearch($post);
    }



}