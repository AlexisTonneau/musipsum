<?php


class Faq extends Model
{
    public static function getFaq(){
        $bdd = self::getBdd();
        $req = $bdd->prepare('SELECT * FROM faq');
        if (!$req->execute()){
            throw new Exception('Cannot connect to database');
        }
        $i = 0;
        while ($array = $req->fetch()){
            $var[$i][0] = $array['id_faq'];
            $var[$i][1] = $array['question'];
            $var[$i][2]= $array['reponse'];
            $i++;
        }
        return $var;
    }

    public static function newFaq()
    {
        if (isset($_POST['question']) && isset($_POST['reponse'])) {
            $bdd = self::getBdd();
            $question = $_POST['question'];
            $reponse = $_POST['reponse'];
            $req = $bdd->prepare('INSERT INTO faq (question, reponse) VALUES (:question,:reponse)');
            $req->bindParam(':question',$question);
            $req->bindParam(':reponse',$reponse);
            if (!$req->execute()){
                throw new Exception('Cannot connect to database');
            }
            header('Location :'.URL.'es/accueil/faq');
        }
    }

    public static function modifyFaq(){
        if (isset($_POST['id']) ){
            $bdd = self::getBdd();
            if (isset($_POST['question']) && isset($_POST['reponse'])) {
                $req = $bdd->prepare('UPDATE faq SET question = :question AND reponse = :reponse WHERE id_faq = :id');
                $req->bindParam(':reponse',$_POST['reponse']);
                $req->bindParam(':question',$_POST['question']);
            }
            elseif (isset($_POST['question']) && !isset($_POST['reponse']) ){
                $req = $bdd->prepare('UPDATE faq SET question = :question  WHERE id_faq = :id');
                $req->bindParam(':question',$_POST['question']);

            }
            elseif (!isset($_POST['question']) && isset($_POST['reponse']) ){
                $req = $bdd->prepare('UPDATE faq SET reponse = :reponse WHERE id_faq = :id');
                $req->bindParam(':reponse',$_POST['reponse']);
            }
            if (!$req->execute()){
                throw new Exception('Cannot connect to database');
            }
            header('Location :'.URL.'es/accueil/faq');

        }
    }


}