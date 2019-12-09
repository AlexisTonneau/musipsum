<?php


class TestModel extends Model
{
    private $id;
    private $name;
    private $id_type_test;
    private $id_auto_ecole;
    private $video_lien;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getIdTypeTest()
    {
        return $this->id_type_test;
    }

    /**
     * @param mixed $id_type_test
     */
    public function setIdTypeTest($id_type_test)
    {
        $this->id_type_test = $id_type_test;
    }

    /**
     * @return mixed
     */
    public function getIdAutoEcole()
    {
        return $this->id_auto_ecole;
    }

    /**
     * @param mixed $id_auto_ecole
     */
    public function setIdAutoEcole($id_auto_ecole)
    {
        $this->id_auto_ecole = $id_auto_ecole;
    }

    /**
     * @return mixed
     */
    public function getVideoLien()
    {
        return $this->video_lien;
    }

    /**
     * @param mixed $video_lien
     */
    public function setVideoLien($video_lien)
    {
        $this->video_lien = $video_lien;
    }



    public static function searchById($id) :TestModel{
        if(self::getAllModels()===null){
            throw new Exception('Pas de modèle de test');
        }
        $bool=true;
        foreach (self::getAllModels() as $model){
            if ($model->getId() === $id){
                $bool = false;
                return $model;
            }
        }
        if ($bool){
            throw new Exception("Le test spécifié est introuvable");
        }
    }

    public static function getAllModels(){
        $i = 0;
        $var=null;
        $bdd = self::getBdd();
        $req = $bdd->prepare('SELECT * FROM tests_models WHERE id_auto_ecole='.self::getCurrentAccount()->getDrivingSchoolId().' OR id_auto_ecole IS NULL');   //Modèles de tests de l'auto école ou ou modèles généraux (null)
        if(!$req->execute()){
            throw new Exception("Connexion échouée");
        }
        while ($model = $req->fetch(PDO::FETCH_ASSOC)){
            $var[$i] = new self;
            $var[$i]->setName($model['name']);
            $var[$i]->setIdTypeTest($model['id_type_test']);
            $var[$i]->setId($model['id']);
            $i++;
        }
        return $var;

    }





}