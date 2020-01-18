<?php

class Autocompletion extends Model
{


    public static function getData()
    {
        $bdd = self::getBdd();

            $requete = $bdd->prepare('SELECT * FROM user '); // j'effectue ma requête SQL grâce au mot-clé LIKE
        $i=0;
        //$var = '';
        $requete->execute();
        $array = array(); // on créé le tableau

        while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
        {
            $array[] = array($donnee['name'],$donnee['first_name']); // et on ajoute celles-ci à notre tableau
        }

        echo json_encode($array); // il n'y a plus qu'à convertir en JSON

    }

}

