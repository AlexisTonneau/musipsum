<?php


class TestModel extends Model
{
    private $id;
    private $name;
    private $id_auto_ecole;
    private $video_lien;
    private $nameEn;
    private $nameEs;
    private $url_en;
    private $url_es;

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

    /**
     * @return mixed
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * @param mixed $nameEn
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;
    }

    /**
     * @return mixed
     */
    public function getNameEs()
    {
        return $this->nameEs;
    }

    /**
     * @param mixed $nameEs
     */
    public function setNameEs($nameEs)
    {
        $this->nameEs = $nameEs;
    }

    /**
     * @return mixed
     */
    public function getUrlEn()
    {
        return $this->url_en;
    }

    /**
     * @param mixed $url_en
     */
    public function setUrlEn($url_en)
    {
        $this->url_en = $url_en;
    }

    /**
     * @return mixed
     */
    public function getUrlEs()
    {
        return $this->url_es;
    }

    /**
     * @param mixed $url_es
     */
    public function setUrlEs($url_es)
    {
        $this->url_es = $url_es;
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
        $ds = self::getCurrentAccount()->getDrivingSchoolId();

        $req = $bdd->prepare('SELECT * FROM tests_models WHERE id_auto_ecole=:ds OR id_auto_ecole IS NULL');   //Modèles de tests de l'auto école ou ou modèles généraux (null)
        $req->bindParam(':ds',$ds);
        if(!$req->execute()){
            throw new Exception("Connexion échouée");
        }
        while ($model = $req->fetch(PDO::FETCH_ASSOC)){
            $var[$i] = new self;
            $var[$i]->setName($model['name']);
            $var[$i]->setId($model['id']);
            $var[$i]->setNameEn($model['name_en']);
            $var[$i]->setNameEs($model['name_es']);
            $var[$i]->setUrlEn($model['url_en']);
            $var[$i]->setUrlEs($model['url_es']);
            $var[$i]->setVideoLien($model['url_fr']);
            $i++;
        }
        return $var;

    }





}