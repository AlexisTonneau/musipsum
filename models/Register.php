<?php


class Register extends Model
{





    public static function registration(User $user){
        $bdd = self::getBdd();

        $birthDate = $user->getNaissanceAnnee().'-'.$user->getNaissanceMois().'-'.$user->getNaissanceJour();
        $password = password_hash($user->getPassword(),PASSWORD_BCRYPT);

        $request =$bdd->PDO::prepare( 'INSERT INTO users (family_name, surname, mail_address, gender, birth_date, height, weight, password) VALUES (:familyname, :surname, :mailadress, :gender, :birth_date,:height,:weight,:password)');
        $request->PDO::bindParam(':family_name',$user->getName());
        $request->PDO::bindParam(':surname',$user->getSurname());
        $request->PDO::bindParam(':mail_address',$user->getMailAdress());
        $request->PDO::bindParam(':gender',$user->getGender());
        $request->PDO::bindParam(':birth_date',$birthDate);
        $request->PDO::bindParam(':height',$user->getHeight());
        $request->PDO::bindParam(':weight',$user->getWeight());
        $request->PDO::bindParam(':password',$password);

        $request->PDO::execute();
    }


}