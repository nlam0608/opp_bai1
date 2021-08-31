<?php

class Manager
{
    public $name;
    public $age;
    public $gender;
    public $address;
    public $list;


    public function __construct($name,$age,$gender,$address,$list = [] )
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
        $this->list = $list;
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
    //    Thêm mới cán bộ công nhân viên.
    public function addStaff($information,$index){
        $this->information = $information;
        $this->index = $index;
        $this->list = function (){
            return ($this->information.$this->index );
        };
    }

//    Tìm kiếm theo họ tên.
//    Hiện thị thông tin về danh sách các cán bộ.
//    Thoát khỏi chương trình.



}
