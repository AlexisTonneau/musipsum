<?php


abstract class Model
{
    private static $_bdd;

    /**
     * @param mixed $bdd
     */
    private static function setBdd($bdd)
    {
        self::$_bdd = new PDO('mysql:host=127.0.0.1;dbname=test_mvc;charset=utf8','root','');
        self::$_bdd ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    /**
     * @return mixed
     */
    public static function getBdd()
    {
        if(self::$_bdd==null){
            self::setBdd();
        }
        return self::$_bdd;
    }

    protected static function getAll($table, $obj){
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM '.$table.' ORDER BY id DESC');
        $req->execute();
        while ($data=$req->fetch(PDO::FETCH_ASSOC)){
            $var = new $obj($data);
        }
        return $var;
        $req-> closeCursor();
    }

}