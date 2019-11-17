<?php





class Register extends Model
{





    public function __construct(User $user){
        $bdd = self::getBdd();

        $birthDate = $user->getNaissanceAnnee().'-'.$user->getNaissanceMois().'-'.$user->getNaissanceJour();
        //$password = password_hash($user->getPassword(),PASSWORD_BCRYPT);
        $password = $user->getPassword();
        $family_name = $user->getName();
        $first_name = $user->getFirstName();
        $mail_address=$user->getMailAddress();
        $gender = $user->getGender();
        $height=$user->getHeight();
        $weight=$user->getWeight();
        $account_type = $user->getAccountType();


        $request =$bdd->prepare( 'INSERT INTO user (family_name, surname, mail_address, gender, birth_date, height, weight, password,account_type) VALUES (:family_name, :surname, :mail_address, :gender, :birth_date,:height,:weight,:password,:account_type)');
        $request->bindParam(':family_name',$family_name);
        $request->bindParam(':surname',$first_name);
        $request->bindParam(':mail_address',$mail_address);
        $request->bindParam(':gender',$gender);
        $request->bindParam(':birth_date',$birthDate);
        $request->bindParam(':height',$height);
        $request->bindParam(':weight',$weight);
        $request->bindParam(':password',$password);
        $request->bindParam(':account_type',$account_type);
        $request->execute();

        //Cette requête avait fonctionné mais l'autre a pas été testée
        /*$request =$bdd->prepare( 'INSERT INTO user (name, first_name, mail_address, password_account) VALUES (:family_name, :surname, :mail_address, :password)');
        $request->bindParam(':family_name',$family_name);
        $request->bindParam(':surname',$first_name);
        $request->bindParam(':mail_address',$mail_address);
        $request->bindParam(':password',$password);
        $request->execute();*/




    }

    public static function check(){
        if(!isset($_POST['mail_address']) || !isset($_POST['name']) || !isset($_POST['password']) /*|| !isset($_POST['confirmation'])*/){
            $errormsg = "Veuillez remplir tous les champs";
        }

        elseif(isset($_POST['mail_address']) && is_null($_POST['mail_address'])){
            $errormsg = "Adresse mail non rentrée";
        }

        elseif (isset($_POST['name']) && is_null($_POST['name'])){
            $errormsg = "Nom non rentré";
        }


        elseif (isset($_POST['password']) && is_null($_POST['password'])){
            $errormsg = "Mot de passe non rentré";
        }

        elseif (isset($_POST['password']) && isset($_POST['confirmation']) && $_POST['password']!=$_POST['confirmation']){
            $errormsg = "Les mots de passes ne correspondent pas";
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

        if (isset($_POST['account_type']) && $_POST['account_type']==1){
            $account_register->setAccountType(1);
            self::createInstructor();
        }
        new Register($account_register);

    }

    private static function createInstructor(){
        //TODO Set a new instructor in database
    }


}