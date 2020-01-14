<?php

echo Autocompletion::getSortedUser();

class Autocompletion extends Model{


public static function getSortedtUser(){


  $users=self::getAllAccounts();

  for($i=0;$i < $numberOfUsers ; i++){
    $myArrayOfUserName[i]=$users->getName()." ".$users->getFirstName();
  }
  $numberOfUsers = count($myArrayOfUserName);

  $results=array();
  $numberOfResults=count($results);

  	//Parcourt tout le tableau $utilisateur 10 fpis
  	for ($i = 0 ; $i < $numberOfUsers && $numberOfResults < 10 ; $i++) {
  	    if (stripos(,) === 0) { // Si la valeur commence par les mêmes caractères que la recherche

  	        array_push($results, $data[$i]); // On ajoute alors le résultat à la liste à retourner

  	    }
  	}

  	echo implode('|', $results); // Et on affiche les résultats séparés par une barre verticale |

}

}

 ?>
