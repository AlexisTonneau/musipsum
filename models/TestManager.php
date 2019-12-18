<?php


class TestManager extends Model
{


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
        $rq2 = $bdd->prepare('SELECT id_capteur FROM donne_mesure_type_capteur CROSS JOIN donne_mesure ON donne_mesure_type_capteur.id_saisie = donne_mesure.id_saisie ORDER BY donne_mesure.debut_saisie DESC LIMIT 1)');
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
        }

        $rq3 = $bdd->prepare('INSERT INTO test_capteur (id_test, id_capteur) VALUES (:test,:capteur)');
        $rq3->bindParam(':test',$test);
        $rq3->bindParam(':capteur',$captor);
        $rq3->execute();
    }

    public static function getDataFromTest(Test $test){
        $bdd = self::getBdd();
        $req = $bdd->prepare('        
        SELECT * FROM donne_mesure WHERE id_saisie IN (
        SELECT donne_mesure_type_capteur.id_saisie FROM donne_mesure_type_capteur WHERE id_capteur IN(
        SELECT type_capteur.id_capteur FROM type_capteur WHERE id_capteur IN (
        SELECT id_capteur FROM test_capteur WHERE id_test IN (
        SELECT id_test FROM test WHERE id_test = :id_test
            
            ))))'); //
        $req->execute();
        while ($capteur = $req->fetch(PDO::FETCH_ASSOC)){
            $type_captor = $capteur['id_capteur'];
        }


    }




}
