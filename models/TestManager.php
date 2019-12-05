<?php


class TestManager extends Model
{


    public static function setTestInDB(Test $test){
        $bdd = self::getBdd();
        $req = $bdd->prepare('                        
        INSERT INTO test (date_mesure,id_user,id_moniteur, id_modele_test) VALUES (NOW(),:id_user,:id_moniteur,:id_modele_test)
        '); //Nouveau test dans la bdd

        $req->bindParam(':id_user',$test->getIdUser());
        $req->bindParam(':id_moniteur',$test->getIdMoniteur());
        $req->bindParam(':id_modele_test',$test->getIdModelTest());

        if(!$req->execute()){
            throw new Exception('Connexion échouée');
        }



        $reqid = $bdd->prepare('SELECT id FROM test ORDER BY id DESC LIMIT (1) ');
        $reqid->execute();
        $id = null;
        foreach ($reqid->fetch() as $item){
            $id = $item['id'];
        }

        $req2 = $bdd->prepare('
        UPDATE user SET token_test = :id_test WHERE id= :id_user
        '); //Création d'un token de lancement de test


        $req2->bindParam(':id_user',$test->getIdUser());
        $req2->bindParam(':id_test',$id);


        if(!$req2->execute() ){
            throw new Exception('Connexion échouée');
        }

        return true;


    }

    public static function checkToken() :int{
        $bdd = self::getBdd();
        $token=0;
        $account = self::getCurrentAccount();
        $req = $bdd->prepare('SELECT token_test FROM user WHERE id = :id_user');
        $req->bindParam(':id_user',$account->getId());
        if(!$req->execute()){
            throw new Exception('Connexion échouée');
        }
        while ($account = $req->fetch(PDO::FETCH_ASSOC)){
            $token = $account['token_test'];
        }
        return $token;
    }

    public static function findVideo(int $test){
        $url='';
        $bdd = self::getBdd();
        $req = $bdd->prepare('SELECT * FROM test_models WHERE id=(SELECT id_modele_test FROM test WHERE id=:id_test)');
        $req->bindParam(':id_test',$test);
        foreach ($req->fetch() as $item){
            $url = $item['url_video'];  //Ce texte sur la bdd sera soit une direction vers un fichier ou un url de vidéo depuis un hébergeur externe (YT...)
        }
        return $url;
    }
    public static function deleteToken() {
        $bdd = self::getBdd();
        $account = self::getCurrentAccount();
        $req = $bdd->prepare('UPDATE user SET token_test=0 WHERE id_user = :id_user');
        $req->bindParam(':id_user',$account->getId());
        if(!$req->execute()){
            throw new Exception('Connexion échouée');
        }
    }


}
