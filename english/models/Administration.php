<?php


/**
 * Class Administration : Static functions to administrate website
 */
class Administration extends Model
{
    public static function getData ($type){
        $bdd = self::getBdd();

        if ($type === 'cgu'){
        $req = $bdd->prepare('SELECT * FROM cgu WHERE id_cgu=1');
        $req->execute();
        $cgu = $req->fetch();
        return $cgu['cgu'];}
        else{
            $req = $bdd->prepare('SELECT * FROM mentions_legales WHERE id=1');
            $req->execute();
            $ml = $req->fetch();
            return $ml['m_l'];
        }

    }

    public static function checkData()
    {
        if (isset($_POST['cgu']) && $_POST['cgu']!==null){
            $bdd = self::getBdd();
            $req = $bdd->prepare('UPDATE cgu SET cgu=:cgu WHERE id_cgu=1');
            $req->bindParam(':cgu',htmlspecialchars($_POST['cgu']));
            $req->execute();

        }
        if (isset($_POST['m_l']) && $_POST['m_l']!==null){
            $bdd = self::getBdd();
            $req = $bdd->prepare('UPDATE mentions_legales SET m_l=:cgu WHERE id=1');
            $req->bindParam(':cgu',htmlspecialchars($_POST['m_l']));
            $req->execute();

        }

    }


}