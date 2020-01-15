<?php

new Autocompletion();

class Autocompletion extends Model
{


    public function __construct()
    {
        $bdd = self::getBdd();

        if (AccountManager::getCurrentAccount()->getAccountType() === AccountManager::ADMINISTRATOR_USER) {
            $requete = $bdd->prepare('SELECT * FROM user WHERE name LIKE :term OR first_name LIKE :term'); // j'effectue ma requête SQL grâce au mot-clé LIKE
        }else{
            $requete = $bdd->prepare('SELECT * FROM user WHERE id_autoecole = :id_autoecole AND ( name LIKE :term OR first_name LIKE :term)'); // j'effectue ma requête SQL grâce au mot-clé LIKE
        }
        $i=0;
        //$var = '';
        $requete->execute(array('term' => '%'.$_GET['term'].'%'));
        $array = array(); // on créé le tableau

        while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
        {
            $array[] = array($donnee['name'],$donnee['first_name']); // et on ajoute celles-ci à notre tableau
        }

        echo json_encode($array); // il n'y a plus qu'à convertir en JSON

    }

}

