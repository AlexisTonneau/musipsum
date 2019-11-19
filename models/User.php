<?php


class User extends Model
{
    private $id_user;            //ALL PARAMETERS IN DATABASE
    private $name;
    private $first_name;
    private $account_type;
    private $height;
    private $weight;
    private $mail_address;
    private $gender;
    private $naissance_jour;
    private $naissance_mois;
    private $naissance_annee;
    private $password;
    private $driving_school_id;


    public function manuallyConstruct($familyname,$surname,$mailAddress,$gender,$yearBirth,$monthBirth,$dayBirth,$height,$weight){
        $this->height=$height;
        $this->naissance_jour=$dayBirth;
        $this->gender = $gender;
        $this->naissance_annee = $yearBirth;
        $this->naissance_mois = $monthBirth;
        $this->weight = $weight;
        $this->mail_adress = $mailAddress;
        $this->surname = $surname;
        $this->name = $familyname;
        $this->account_type = self::REGULAR_USER;
    }




    public function getId()
    {
        return $this->id_user;
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
    public function getMailAddress()
    {
        return $this->mail_address;
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
    public function getFirstName()
    {
        return $this->first_name;
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
        $this->id_user = $id;
    }

    public function getNom(){
        return $this->nom;
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
    public function setFirstName($surname)
    {
        $this->first_name = $surname;
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
    public function setMailAddress($mail_adress)
    {
        $this->mail_address = $mail_adress;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getDrivingSchoolId()
    {
        return $this->driving_school_id;
    }

    /**
     * @param mixed $driving_school_id
     */
    public function setDrivingSchoolId($driving_school_id)
    {
        //TODO get from Instructor object
    }









}