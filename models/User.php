<?php


class User extends Model
{
    private $id;            //ALL PARAMETERS IN DATABASE
    private $name;
    private $surname;
    private $account_type;
    private $height;
    private $weight;
    private $mail_adress;
    private $gender;
    private $naissance_jour;
    private $naissance_mois;
    private $naissance_annee;
    private $urlphoto;


    public function __construct(array $data)
    {
        $this->hydrate($data);


    }
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method))
                $this->$method($value);

        }
    }




    public function getId()
    {
        return $this->id;
    }

    public function getAccountType()
    {
        return $this->account_type;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getMailAdress()
    {
        return $this->mail_adress;
    }

    /**
     * @return mixed
     */
    public function getNaissanceString()
    {
        return $this->naissance_jour.$this->naissance_mois.$this->naissance_annee;
    }

    /**
     * @return mixed
     */
    public function getNaissanceAnnee()
    {
        return $this->naissance_annee;
    }

    /**
     * @return mixed
     */
    public function getNaissanceMois()
    {
        return $this->naissance_mois;
    }

    /**
     * @return mixed
     */
    public function getNaissanceJour()
    {
        return $this->naissance_jour;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @param mixed $account_type
     */
    public function setAccountType($account_type)
    {
        $this->account_type = $account_type;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param mixed $mail_adress
     */
    public function setMailAdress($mail_adress)
    {
        $this->mail_adress = $mail_adress;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $naissance_jour
     */
    public function setNaissanceJour($naissance_jour)
    {
        $this->naissance_jour = $naissance_jour;
    }

    /**
     * @param mixed $naissance_mois
     */
    public function setNaissanceMois($naissance_mois)
    {
        $this->naissance_mois = $naissance_mois;
    }

    /**
     * @param mixed $naissance_annee
     */
    public function setNaissanceAnnee($naissance_annee)
    {
        $this->naissance_annee = $naissance_annee;
    }

    /**
     * @return mixed
     */
    public function getUrlphoto()
    {
        return $this->urlphoto;
    }





}