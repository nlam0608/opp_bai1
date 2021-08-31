<?php

include_once ("Manager.php");

class Staff extends Manager
{
    private $work;

    public function __construct($name, $age, $gender, $address, $work)
    {
        parent::__construct($name, $age, $gender, $address);
        $this->work = $work;
    }

    public function getWork(){
        return $this->work;
    }

    public  function getName()
    {
        return parent::getName();
    }

    public function getAge()
    {
        return parent::getAge();
    }

    public function getGender()
    {
        return parent::getGender();
    }

    public function getAddress()
    {
        return parent::getAddress();
    }
}