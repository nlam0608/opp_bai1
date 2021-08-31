<?php

include ("Manager.php");

class Worker extends Manager {

    private $rank;

    public function __construct($name, $age, $gender, $address,$rank)
    {
        parent::__construct($name, $age, $gender, $address);
        $this->rank = $rank;
    }

    public function getRank(){
        return $this->rank;
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