<?php

class Manager
{
    public $name;
    public $age;
    public $gender;
    public $address;


    public function __construct($name,$age,$gender,$address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;

    }

    public function getName(){
        return $this->name;
    }

    public function setname($name){
        $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getGender(){
        return $this->gender;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    
}
