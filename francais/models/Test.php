<?php


class Test extends Model
{
    private $id;
    private $id_model_test;
    private $id_user;
    private $id_moniteur;
    private $bool;
    private $date;


    /**
     * Test constructor.
     * @param $id_user
     * @param $id_moniteur
     */

    public function __construct($id_user, $id_moniteur, $id_model_test)
    {
        $this->id_user = $id_user;
        $this->id_moniteur = $id_moniteur;
        $this->id_model_test = $id_model_test;
    }


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
    public function getIdModelTest()
    {
        return $this->id_model_test;
    }

    /**
     * @param mixed $id_model_test
     */
    public function setIdModelTest($id_model_test)
    {
        $this->id_model_test = $id_model_test;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getIdMoniteur()
    {
        return $this->id_moniteur;
    }

    /**
     * @param mixed $id_moniteur
     */
    public function setIdMoniteur($id_moniteur)
    {
        $this->id_moniteur = $id_moniteur;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $date = date('d-m-y h:i',strtotime($date));
        $date = str_replace('-','/',$date);
        $date = str_replace(':','h',$date);
        $this->date = $date;
    }







}