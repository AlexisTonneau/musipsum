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
    public static function getAddressFromUser():string {
        if (isset($_SESSION['driving_school']) && $_SESSION['driving_school'] !== null){
            $ds = unserialize($_SESSION['driving_school']);
            return $ds->getAddress();
        }

        return '28 rue Notre dame des champs 75006 Paris';
    }

    public static function getPhoneFromUser():string {
        if (isset($_SESSION['driving_school']) && $_SESSION['driving_school'] !== null){
            $ds = unserialize($_SESSION['driving_school']);
            return $ds->getPhoneNumber();
        }

        return '+33 8 85 47 12 65';
    }

    public static function modifyDrivingSchool():bool {
        $bdd = self::getBdd();
        $sql = "''";
        $sql .= 'UPDATE auto_ecole SET ';
        if (isset($_POST['name']) AND $_POST['name']!==null){
            $name=$_POST['name'];
            $sql .= 'name ='."''".$name."''";
        }
        if (isset($_POST['phone']) AND $_POST['phone']!==null){
            $phone=$_POST['phone'];
            $sql .= 'phone_number ='."''".$phone."''";
        }
        if (isset($_POST['adress']) AND $_POST['adress']!==null){
            $adress=$_POST['adress'];
            $sql .= 'adress ='."'".$adress."',";
        }
        if (isset($_POST['description']) AND $_POST['description']!==null){
            $descri=$_POST['description'];
            $sql .= 'description ='."'".$descri."',";
        }
        if (isset($_POST['cgu']) AND $_POST['cgu']!==null){
            $cgu=$_POST['cgu'];
            $sql .= 'cgu ='."'".$cgu."',";
        }
        if (isset($_POST['mention_legal']) AND $_POST['mention_legal']!==null){
            $descri=$_POST['mention_legal'];
            $sql .= 'mention_legal ='."'".$descri."',";
        }
        if ($sql === 'UPDATE auto_ecole SET '){
            return false;
        }
        else{
            $sql .= 'WHERE id ='.self::getCurrentDrivingSchool()->getId()."''";
            $req =$bdd->prepare($sql);
            $req->execute();

        }






    }
}