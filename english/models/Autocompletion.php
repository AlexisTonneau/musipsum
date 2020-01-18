<?php

class Autocompletion extends Model
{


    public static function getData()
    {
        $bdd = self::getBdd();

            $requete = $bdd->prepare('SELECT * FROM user ');
        $requete->execute();
        $array = array();

        while($donnee = $requete->fetch())
        {
            $array[] = array($donnee['name'],$donnee['first_name']);
        }

        echo json_encode($array);

    }

}

