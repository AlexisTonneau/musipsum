<?php


class Register extends Model
{


    private $bdd;


    /**
     * Register constructor.
     */
    public function __construct()
    {
        $this->bdd = self::getBdd();
    }

    public function register(User $user){
        $birthDate = $user->getNaissanceAnnee().'-'.$user->getNaissanceMois().'-'.$user->getNaissanceJour();

        $request =$this->bdd->PDO::prepare( 'INSERT INTO users (family_name, surname, mail_address, gender, birth_date, height, weight) VALUES (:familyname, :surname, :mailadress, :gender, :birth_date,:height,:weight)');
        $request->PDO::bindParam(':family_name',$user->getName());
        $request->PDO::bindParam(':surname',$user->getSurname());
        $request->PDO::bindParam(':mail_address',$user->getMailAdress());
        $request->PDO::bindParam(':gender',$user->getGender());
        $request->PDO::bindParam(':birth_date',$birthDate);
        $request->PDO::bindParam(':height',$user->getHeight());
        $request->PDO::bindParam(':weight',$user->getWeight());

    }

    public function createUser($familyname,$surname,$mailAddress,$gender,$birthDate,$height,$weight){

    }
}