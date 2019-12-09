<?php


class TestManager extends Model
{


    public static function searchById($id) :Test{
        if(self::getAllTests()===null){
            throw new Exception('Pas de test');
        }
        $bool=true;
        foreach (self::getAllTests() as $model){
            if ($model->getId() == $id){
                $bool = false;
                return $model;
            }
        }
        if ($bool){
            throw new Exception("Le test spécifié est introuvable");
        }
    }
    public static function getAllTests(){
        $i = 0;
        $var=null;
        $bdd = self::getBdd();
        $req = $bdd->prepare('SELECT * FROM test ');   //Modèles de tests de l'auto école ou ou modèles généraux (null)
        if(!$req->execute()){
            throw new Exception("Connexion échouée");
        }
        while ($model = $req->fetch(PDO::FETCH_ASSOC)){
            $var[$i] = new Test($model['id_user'],$model['id_moniteur'],$model['id_modele_test']);
            $var[$i]->setId($model['id_test']);
            $var[$i]->setDate($model['date_mesure']);
            $i++;
        }
        return $var;

    }

    public static function getAllTestsUser(){
        $account = self::getCurrentAccount();
        $i = 0;
        $var=null;
        $bdd = self::getBdd();
        $req = $bdd->prepare('SELECT * FROM test WHERE id_user = :id_user ORDER BY date_mesure DESC');   //Modèles de tests de l'auto école ou ou modèles généraux (null)
        $idd = $account->getId();
        $req->bindParam(':id_user',$idd);
        if(!$req->execute()){
            throw new Exception("Connexion échouée");
        }
        while ($model = $req->fetch(PDO::FETCH_ASSOC)){
            $var[$i] = new Test($model['id_user'],$model['id_moniteur'],$model['id_modele_test']);
            $var[$i]->setId($model['id_test']);
            $var[$i]->setDate($model['date_mesure']);
            $i++;
        }
        return $var;

    }



    public static function setTestInDB(Test $test){
        $bdd = self::getBdd();
        $req = $bdd->prepare('                        
        INSERT INTO test (date_mesure,id_user,id_moniteur, id_modele_test) VALUES (NOW(),:id_user,:id_moniteur,:id_modele_test)
        '); //Nouveau test dans la bdd

        $iduser = $test->getIdUser();
        $idmoniteur = $test->getIdMoniteur();
        $modele_test = $test->getIdModelTest();

        $req->bindParam(':id_user',$iduser);
        $req->bindParam(':id_moniteur',$idmoniteur);
        $req->bindParam(':id_modele_test', $modele_test);

        if(!$req->execute()){
            throw new Exception('Connexion échouée');
        }

        if(!$req->execute()){
            throw new Exception('Connexion échouée');
        }





        $req2 = $bdd->prepare('
        UPDATE user SET token_test = :id_test WHERE id_user= :id_user
        '); //Création d'un token de lancement de test

        $id_user = $test->getIdUser();

        $req2->bindParam(':id_user',$id_user);
        $req2->bindParam(':id_test',$modele_test);

        if(!$req2->execute() ){
            throw new Exception('Connexion échouée');
        }

        return true;


    }

    public static function checkToken() :int{
        $bdd = self::getBdd();
        $token=1;
        $account = self::getCurrentAccount();
        $req = $bdd->prepare('SELECT * FROM user WHERE id_user = :id_user');
        $id_account = $account->getId();
        $req->bindParam(':id_user',$id_account);
        if(!$req->execute()){
            throw new Exception('Connexion échouée');
        }
        while ($abc = $req->fetch(PDO::FETCH_ASSOC)){
           // debug($abc);
            $token = $abc['token_test'];
        }
        return $token;
    }

    public static function findVideo(int $test){
        $url='https://www.youtube.com/embed/M4B16pSRDvw"';
        $bdd = self::getBdd();
        $req = $bdd->prepare('SELECT * FROM tests_models INNER JOIN test ON tests_models.id = test.id_modele_test AND test.id_test = :id_test');
        $req->bindParam(':id_test',$test);
        while ($item = $req->fetch()  ){
            $url = $item['url_video'];  //Ce texte sur la bdd sera soit une direction vers un fichier ou un url de vidéo depuis un hébergeur externe (YT...)
        }
        return $url;
    }

    public static function deleteToken() {
        $bdd = self::getBdd();
        $account = self::getCurrentAccount();
        $req = $bdd->prepare('UPDATE user SET token_test=0 WHERE id_user = :id_user');
        $id_user = $account->getId();
        $req->bindParam(':id_user',$id_user);
        if(!$req->execute()){
            throw new Exception('Connexion échouée');
        }
    }

    public static function sendModelId(){
        if (isset($_POST['id_test'])){
            $_SESSION['id_test'] = $_POST['id_test'];
            header('Location: '.URL.'test');
        }

    }

    /**
     * Permet d'idientifier un capteur à un objet test de la bdd, donc d'y relier ses données
     */
    public static function assignCaptorToTest(){
        $bdd = self::getBdd();

        $req = $bdd->prepare('SELECT id_test FROM test ORDER BY test.date_mesure  DESC LIMIT 1');
        $rq2 = $bdd->prepare('SELECT id_capteur, donne_mesure.id_saisie FROM donne_mesure_type_capteur CROSS JOIN donne_mesure ON donne_mesure_type_capteur.id_saisie = donne_mesure.id_saisie ORDER BY donne_mesure.debut_saisie DESC LIMIT 1');
        $req->execute();
        $rq2->execute();

        $test="";
        $captor="";
        while ($abc = $req->fetch(PDO::FETCH_ASSOC)){
            // debug($abc);
            $test = $abc['id_test'];
        }
        while ($abc = $rq2->fetch(PDO::FETCH_ASSOC)){
            // debug($abc);
            $captor= $abc['id_capteur'];
            $saisie = $abc['id_saisie'];
        }

        $rq3 = $bdd->prepare('INSERT INTO test_capteur (id_test, id_capteur) VALUES (:test,:capteur)');
        $rq3->bindParam(':test',$test);
        $rq3->bindParam(':capteur',$captor);
        $rq3->execute();

        $rq4 = $bdd->prepare('UPDATE donne_mesure_type_capteur SET id_test =:id WHERE id_saisie = :id_saisie');
        $rq4->bindParam(':id',$test);
        $rq4->bindParam(':id_saisie',$saisie);
        $rq4->execute();


    }

    public static function getCaptorsFromTest(Test $test){
        $bdd = self::getBdd();
        $i = 0;
        $req = $bdd->prepare('        
        SELECT type_capteur.id_capteur FROM type_capteur WHERE id_capteur IN (
        SELECT id_capteur FROM test_capteur WHERE id_test = :id_test ORDER BY id DESC )
        '); //SELECT * FROM donne_mesure WHERE id_saisie IN (
        //SELECT donne_mesure_type_capteur.id_saisie FROM donne_mesure_type_capteur WHERE id_capteur IN(
        $test_id = $test->getId();
        $req->bindParam(':id_test',$test_id);
        $req->execute();
        while ($capteur = $req->fetch(PDO::FETCH_ASSOC)){
            $type_captor[$i] = $capteur['id_capteur'];
            $i++;
        }
        return $type_captor;

    }

    /**
     * @param $id_captor //id du capteur spécifié (température,...)
     * @param $test     //id du test spécifié
     * @return array    //array à deux dimensions : plusieurs arrays avec le timestamp de début, de fin, et la valeur
     */
    public static function getDataFromTest($id_captor, $test){
        $bdd = self::getBdd();
        $i=0;

        $req = $bdd->prepare('SELECT valeur_saisie, debut_saisie, fin_saisie FROM donne_mesure JOIN donne_mesure_type_capteur dmtc on donne_mesure.id_saisie = dmtc.id_saisie WHERE id_test=:test AND id_capteur = :capteur ORDER BY fin_saisie ');
        $req->bindParam(':test',$test);
        $req->bindParam(':capteur',  $id_captor);
        $req->execute();
        while ($data = $req->fetch()){
            $values[$i] = array(
                self::dateToInt($data['debut_saisie']),
                self::dateToInt($data['fin_saisie']),
                (float)$data['valeur_saisie'],
            );
            $i++;
        }
        try{
            return $values;
        }catch (Exception $exception){
            return null;
        }
    }

    private static function dateToInt(string $date){
        return (int)str_replace(array('-', ' ',':'), '', $date);


    }






}
if (isset($_GET['search']) && $_GET['search']!==null && isset($_GET['quatre']) && $_GET['quatre'] !==null && isset($_GET['cinq'])){
    $captors = TestManager::getCaptorsFromTest(TestManager::searchById($_GET['search']));
    $boolean = false;
    foreach ($captors as $captor){
        if($_GET['quatre'] == $captor){        //Vérifie que le capteur appelé par la requête AJAX est bien présent dans le test
            $boolean = true;
        }
    }
    if (!$boolean){
        echo null;
    }
    else{
        $array = TestManager::getDataFromTest($_GET['quatre'],$_GET['search']);
        echo (json_encode($array));
    }

}

if (isset($_GET['search']) && !isset($_GET['quatre']) && is_numeric($_GET['search']) ){
    $captors = TestManager::getCaptorsFromTest(TestManager::searchById($_GET['search']));
    ?> <div hidden>
    <?php  echo (json_encode($captors));?>
</div> <?php
}
