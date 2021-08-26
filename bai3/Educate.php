<?php
include ("Manager.php");

class Educate{
    private $educate;

    public function __construct($name, $age, $gender, $address, $educate)
    {
        parent::__construct($name, $age, $gender, $address);
        $this->educate = $educate;
    }

    public function getEducate(){
        return $this->educate;
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