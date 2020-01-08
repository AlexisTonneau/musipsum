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
            $var[$i]->setAddress($driving_school['adress']);


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

    private static function modifyDrivingSchool($id) {
        $bdd = self::getBdd();
        if (isset($_POST['name']) AND $_POST['name']!==null){
            $name=htmlspecialchars($_POST['name']);
            $req = $bdd->prepare('UPDATE auto_ecole SET name = :name WHERE id_auto_ecole=:id');
            $req->bindParam(':id',$id);
            $req->bindParam(':name',$name);
            if(!$req->execute()){
                throw new Exception("Connexion échouée");
            }

        }
        if (isset($_POST['phone']) AND $_POST['phone']!==null){
            $name=htmlspecialchars($_POST['phone']);
            $req = $bdd->prepare('UPDATE auto_ecole SET phone_number = :name WHERE id_auto_ecole=:id');
            $req->bindParam(':id',$id);
            $req->bindParam(':name',$name);
            if(!$req->execute()){
                throw new Exception("Connexion échouée");
            }
        }
        if (isset($_POST['adress']) AND $_POST['adress']!==null){
            $name=htmlspecialchars($_POST['adress']);
            $req = $bdd->prepare('UPDATE auto_ecole SET adress = :name WHERE id_auto_ecole=:id');
            $req->bindParam(':id',$id);
            $req->bindParam(':name',$name);
            if(!$req->execute()){
                throw new Exception("Connexion échouée");
            }
        }
        if (isset($_POST['description']) AND $_POST['description']!==null){
            $name=htmlspecialchars($_POST['description']);
            $req = $bdd->prepare('UPDATE auto_ecole SET description = :name WHERE id_auto_ecole=:id');
            $req->bindParam(':id',$id);
            $req->bindParam(':name',$name);
            if(!$req->execute()){
                throw new Exception("Connexion échouée");
            }

        }

        if (isset($_POST['mail_address']) AND $_POST['mail_address']!==null){
            $name=$_POST['mail_address'];
            $req = $bdd->prepare('UPDATE auto_ecole SET mail_address = :name WHERE id_auto_ecole=:id');
            $req->bindParam(':id',$id);
            $req->bindParam(':name',$name);
            if(!$req->execute()){
                throw new Exception("Connexion échouée");
            }

        }
    }

    public static function checkDrivingSchool(){
        if(isset($_POST['id'])){
            self::modifyDrivingSchool($_POST['id']);
            header('Location: '.URL.'account');
        }

    }
    public static function listDS(){
        $bdd = self::getBdd();
        $i = 0;


        $req = $bdd->prepare("SELECT * FROM auto_ecole ORDER BY name");


        if(!$req->execute()){
            throw new Exception("Cannot connect to database");
        }
        $var = null;
        while ($account = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[$i] = new DrivingSchool();
            $var[$i]->setName($account['name']);
            $var[$i]->setDescription($account['description']);
            $var[$i]->setPhoneNumber($account['phone_number']);
            $var[$i]->setAddress($account['adress']);
            $var[$i]->setMailAddress($account['mail_address']);
            $var[$i]->setId($account['id_auto_ecole']);
            $i++;
        }

        return $var;
    }
    public static function deleteDrivingSchool($id){
        $bdd = self::getBdd();
        $req = $bdd->prepare('DELETE FROM auto_ecole WHERE id_auto_ecole=:id');
        $req->bindParam(':id',$id);
        if(!$req->execute()){
            throw new Exception("Connexion échouée");
        }
        else{
            AccountManager::deleteAllAccountsDS($id);
            header('Location: '.URL.'administration/list-driving-school');
        }
    }

    public static function getDrivingSchoolById($id)
    {
        $bdd = self::getBdd();
        $req = $bdd->prepare('SELECT * FROM auto_ecole WHERE id_auto_ecole=:id');
        $req->bindParam(':id',$id);
        if(!$req->execute()){
            throw new Exception("Connexion échouée");
        }

        $var = null;
        while ($driving_school=$req->fetch(PDO::FETCH_ASSOC)){
            $var = new DrivingSchool();
            $var->setName($driving_school['name']);
            $var->setMailAddress($driving_school['mail_address']);
            $var->setPhoneNumber($driving_school['phone_number']);
            $var->setId($driving_school['id_auto_ecole']);
            $var->setAddress($driving_school['adress']);


        }
        return $var;


    }


}





