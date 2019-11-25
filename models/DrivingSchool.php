<?php


class DrivingSchool extends Model
{
    private $name;
    private $mail_address;
    private $phone_number;
    private $id;
    private $description;
    private $address;
    private $cgu;
    private $mention_legal;


    /**
     * DrivingSchool constructor.
     * @param $name
     */
    public function __construct()
    {
        $this->name= '';
        $this->mail_address= '';
        $this->phone_number=0;
        $this->id=0;
        $this->address= '';
        $this->cgu= '';
        $this->description= '';


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
    public function getMailAddress()
    {
        return $this->mail_address;
    }

    /**
     * @param mixed $mail_address
     */
    public function setMailAddress($mail_address)
    {
        $this->mail_address = $mail_address;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCgu()
    {
        return $this->cgu;
    }

    /**
     * @param mixed $cgu
     */
    public function setCgu($cgu)
    {
        $this->cgu = $cgu;
    }

    /**
     * @return mixed
     */
    public function getMentionLegal()
    {
        return $this->mention_legal;
    }

    /**
     * @param mixed $mention_legal
     */
    public function setMentionLegal($mention_legal)
    {
        $this->mention_legal = $mention_legal;
    }






}