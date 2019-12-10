<?php





class Register extends Model
{



    private $status;

    public function __construct(User $user){
        $bdd = self::getBdd();

        $birthDate = $user->getNaissanceAnnee().'-'.$user->getNaissanceMois().'-'.$user->getNaissanceJour();


        $password = password_hash($user->getPassword(),PASSWORD_BCRYPT);

        $family_name = $user->getName();
        $first_name = $user->getFirstName();
        $mail_address=$user->getMailAddress();
        $gender = $user->getGender();
        if($user->getHeight()!==''){
        $height=$user->getHeight();}
        else{
            $height = 0;
        }
        if($user->getWeight()!==''){
        $weight=$user->getWeight();}
        else{
            $weight = 0;
        }
        $account_type = $user->getAccountType();
        $id_driving_school = $user->getDrivingSchoolId();




        $request =$bdd->prepare( 'INSERT INTO user (name, first_name, mail_address, gender, birth_date, height, weight, password_account,account_type) VALUES (:family_name, :surname, :mail_address, :gender, :birth_date,:height,:weight,:password,:account_type)');

        $request->bindParam(':family_name',$family_name);
        $request->bindParam(':surname',$first_name);
        $request->bindParam(':mail_address',$mail_address);
        $request->bindParam(':gender',$gender);
        $request->bindParam(':birth_date',$birthDate);
        $request->bindParam(':height',$height);
        $request->bindParam(':weight',$weight);
        $request->bindParam(':password',$password);
        $request->bindParam(':account_type',$account_type);

        if($request->execute()){
            $this->status=true;
        }
        else{
            $this->status=false;
        }



        //Cette requête avait fonctionné mais l'autre a pas été testée
        /*$request =$bdd->prepare( 'INSERT INTO user (name, first_name, mail_address, password_account) VALUES (:family_name, :surname, :mail_address, :password)');
        $request->bindParam(':family_name',$family_name);
        $request->bindParam(':surname',$first_name);
        $request->bindParam(':mail_address',$mail_address);
        $request->bindParam(':password',$password);
        $request->execute();*/




    }

    public static function check(){
        if(!isset($_POST['mail_address'], $_POST['name'], $_POST['password']) ){
           $errormsg = "Veuillez remplir tous les champs";
        }

        elseif(isset($_POST['mail_address']) && $_POST['mail_address'] === null){
            $errormsg = "Adresse mail non rentrée";
        }

        elseif (isset($_POST['name']) && $_POST['name'] === null){
            $errormsg = "Nom non rentré";
        }


        elseif (isset($_POST['password']) && $_POST['password'] === null){
            $errormsg = "Mot de passe non rentré";
        }

        elseif (isset($_POST['password']) && isset($_POST['confirmation']) && $_POST['password']!=$_POST['confirmation']){
            $errormsg = "Les mots de passes ne correspondent pas";
        }

        else{
            if(self::register()){
                $errormsg = "checked";
            }
            else{
                $errormsg = "Error";
            }

        }
        return $errormsg;
    }
    private static function register(){
        $bool = 0;
        $account_register =new User();
        $account_register->setName(htmlspecialchars($_POST['name']));
        $account_register->setMailAddress(htmlspecialchars($_POST['mail_address']));
        $account_register->setPassword(htmlspecialchars($_POST['password']));
        $account_register->setDrivingSchoolId(self::getCurrentAccount()->getDrivingSchoolId());
        if (isset($_POST['jour']) AND isset($_POST['mois']) AND isset($_POST['annee'])){
            $account_register->setNaissanceAnnee(htmlspecialchars($_POST['annee']));
            $account_register->setNaissanceJour(htmlspecialchars($_POST['jour']));
            $account_register->setNaissanceMois(htmlspecialchars($_POST['mois']));
        }
        else{
            $account_register->setNaissanceJour("01");
            $account_register->setNaissanceAnnee("1970");
            $account_register->setNaissanceMois("01");
        }
        if (isset($_POST['first_name'])){
            $account_register->setFirstName(htmlspecialchars($_POST['first_name']));
        }
        if (isset($_POST['height'])){
            $account_register->setHeight(htmlspecialchars($_POST['height']));
        }
        if (isset($_POST['weight'])){
            $account_register->setWeight(htmlspecialchars($_POST['weight']));
        }
        if(isset($_POST['gender'])){
            $account_register->setGender(htmlspecialchars($_POST['gender']));
        }
        if (isset($_POST['account_type'])){
            switch (htmlspecialchars($_POST['account_type'])){
                case 'admin':
                    $account_register->setAccountType(2);

                    break;
                case 'monitor':
                    $bool=1;
                    $account_register->setAccountType(1);

                    break;
                case 'user':
                    $account_register->setAccountType(0);
                    $bool = 2;

                    break;
                default:
                    $account_register->setAccountType(0);
                    $bool = 2;
            }
        }

        $reg =new Register($account_register);
        if($bool == 1){
            self::createInstructor($account_register);
        }
        if ($bool == 2){
            self::linkUserInstructor($account_register);
        }

        return $reg->isStatus();


    }

    private static function createInstructor(User $user){
        $bdd = self::getBdd();
        $name = $user->getName();
        $first_name = $user->getFirstName();
        $mail_address = $user->getMailAddress();
        $driving_school_id = $user->getDrivingSchoolId();

        $request = $bdd->prepare('INSERT INTO moniteur (nom,prenom,adresse_mail,id_autoecole) VALUES (:family_name ,:first_name,:mail_address,:id_drivingschool)');

        $request->bindParam(':family_name',$name);
        $request->bindParam(':first_name',$first_name);
        $request->bindParam(':mail_address',$mail_address);
        $request->bindParam(':id_drivingschool',$driving_school_id);
        $request->execute();
        //TODO Fill moniteur_user


    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }



    private static function linkUserInstructor(User $user){
        if ($user->getAccountType()==Model::REGULAR_USER){
            $bdd = self::getBdd();
            $id_instructor = self::getCurrentAccount()->getId();
           $id_new_user =null;

            $req_id = $bdd->prepare('SELECT * FROM user ORDER BY id_user DESC LIMIT 1');
            $req_id->execute();
            while ($account = $req_id->fetch()){
                $id_new_user = $account['id_user'];
            }




            $req = $bdd->prepare('INSERT INTO moniteur_user (id_user,id_moniteur) VALUES (:id1,:id2)');

            $req->bindParam(':id1',$id_new_user);
            $req->bindParam(':id2',$id_instructor);

           if(! $req->execute()){
               throw new Exception('Connection error');
           }
        }
    }





}
