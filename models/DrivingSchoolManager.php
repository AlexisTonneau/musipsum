<?php


class DrivingSchoolManager extends Model
{
    public static function getAllDrivingSchools(){
        $bdd = self::getBdd();

        $request = $bdd->prepare('SELECT * FROM auto_ecole ORDER BY name');
        $i = 0;
        if (!$request->execute()){
            throw new Exception("Connexion échouée");
        }

        while ($driving_school=$request->fetch(PDO::FETCH_ASSOC)){
            $var[$i] = new DrivingSchool();
            $var[$i]->setName($driving_school['name']);
            $var[$i]->setMailAddress($driving_school['mail_address']);
            $var[$i]->setPhoneNumber($driving_school['phone_number']);
            $var[$i]->setId($driving_school['id_auto_ecole']);
            $var[$i]->setCgu($driving_school['cgu']);
            $var[$i]->setAddress($driving_school['adress']);
            $var[$i]->setMentionLegal($driving_school['mention_legal']);


            $i++;

        }
        return $var;

    }

    public static function getCurrentDrivingSchool(){
        try {
            $driving_schools = self::getAllDrivingSchools();
        } catch (Exception $e) {
            die();
        }


            $account = unserialize($_SESSION['user']);
            $id = $account->getDrivingSchoolId();
            foreach ($driving_schools as $driving_school){
                if($id === $driving_school->getId()){
                    return $driving_school;
                }
            }
            return null;


    }
}