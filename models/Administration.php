<?php


/**
 * Class Administration : Static functions to administrate website
 */
class Administration extends Model
{
    public static function getCGU (){
        $bdd = self::getBdd();
        $req = $bdd->prepare('SELECT * FROM cgu WHERE id_cgu=1');
        $req->execute();
        $cgu = $req->fetch();
        return $cgu['cgu'];

    }

    public static function checkCGU()
    {
        if (isset($_POST['cgu']) && $_POST['cgu']!==null){
            $bdd = self::getBdd();
            $req = $bdd->prepare('UPDATE cgu SET cgu=:cgu WHERE id_cgu=1');
            $req->bindParam(':cgu',$_POST['cgu']);
            $req->execute();

        }
    }


}