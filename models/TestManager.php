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




        $req2 = $bdd->prepare('
        UPDATE user SET token_test = :id_modele_test WHERE id= :id_user
        '); //Création d'un token de lancement de test

        $req2->bindParam(':id_user',$test->getIdUser());
        $req2->bindParam(':id_modele_test',$test->getIdModelTest());


        if(!$req2->execute() || !$req->execute()){
            throw new Exception('Connexion échouée');
        }


    }

    public static function checkToken() :int{
        $bdd = self::getBdd();
        $token=null;
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


}