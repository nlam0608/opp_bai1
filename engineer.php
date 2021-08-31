<?php
include ("Manager.php");

class engineer extends Manager{
    private $trainingnIdustry;

    public function __construct($name, $age, $gender, $address, $trainingnIdustry)
    {
        parent::__construct($name, $age, $gender, $address);
        $this->list = $trainingnIdustry;
    }

    public function gettrainingnIdustry(){
        return $this->trainingnIdustry;
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