<?php

//Tạo lớp khai báo thuộc tính khởi tạo phương thức
class Rectangle{
    public $height;
    public $width;

    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    //Định nghĩa các phương thức getArea(), getPerimeter(), display()
    //    Tinh dien tich
    public function getArea()
    {
        return $this->width * $this->height;
    }
    //Tinh chu vi
    public function getPerimeter()
    {
        return(($this->width + $this->height)*2);
    }
    //hien thi
    public function display(){
        return 'chieu rong'.$this->width.'chieu cao'.$this->height;
    }
}