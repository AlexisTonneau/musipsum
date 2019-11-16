<?php





class Register extends Model
{





    public function __construct(User $user){
        $bdd = self::getBdd();

        $birthDate = $user->getNaissanceAnnee().'-'.$user->getNaissanceMois().'-'.$user->getNaissanceJour();
        $password = password_hash($user->getPassword(),PASSWORD_BCRYPT);

        $request =$bdd->PDO::prepare( 'INSERT INTO users (family_name, surname, mail_address, gender, birth_date, height, weight, password) VALUES (:familyname, :surname, :mailadress, :gender, :birth_date,:height,:weight,:password)');
        $request->PDO::bindParam(':family_name',$user->getName());
        $request->PDO::bindParam(':surname',$user->getFirstName());
        $request->PDO::bindParam(':mail_address',$user->getMailAddress());
        $request->PDO::bindParam(':gender',$user->getGender());
        $request->PDO::bindParam(':birth_date',$birthDate);
        $request->PDO::bindParam(':height',$user->getHeight());
        $request->PDO::bindParam(':weight',$user->getWeight());
        $request->PDO::bindParam(':password',$password);

        $request->PDO::execute();
    }

    public static function check(){
        if(!isset($_POST['mail_address']) || !isset($_POST['name']) || !isset($_POST['password'])){
            $errormsg = "";
        }

        elseif(isset($_POST['mail_address']) && !is_null($_POST['mail_address'])){
            $errormsg = "Adresse mail non rentrée";
        }

        elseif (isset($_POST['name']) && !is_null($_POST['name'])){
            $errormsg = "Nom non rentré";
        }


        elseif (isset($_POST['password']) && !is_null($_POST['password'])){
            $errormsg = "Mot de passe non rentré";
        }

        else{
            self::register();
            $errormsg = "checked";
        }
        return $errormsg;
    }
    private static function register(){
        $account_register =new User();
        $account_register->setName($_POST['name']);
        $account_register->setMailAddress($_POST['mail_address']);
        $account_register->setPassword($_POST['password']);
        if (isset($_POST['jour']) AND isset($_POST['mois']) AND isset($_POST['annee'])){
            $account_register->setNaissanceAnnee($_POST['annee']);
            $account_register->setNaissanceJour($_POST['jour']);
            $account_register->setNaissanceMois($_POST['mois']);
        }
        if (isset($_POST['first_name'])){
            $account_register->setFirstName($_POST['first_name']);
        }
        if (isset($_POST['height'])){
            $account_register->setHeight($_POST['height']);
        }
        if (isset($_POST['weight'])){
            $account_register->setWeight($_POST['weight']);
        }
        if(isset($_POST['gender'])){
            $account_register->setGender($_POST['gender']);
        }
        new Register($account_register);

    }


}