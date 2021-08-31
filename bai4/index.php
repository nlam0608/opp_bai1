<?php
//nhung phai Rectangle
include_once ("Rectangle.php");

//khoi tao doi tuong chuyen tham so

$height = 9;
$width = 9;

$rectangle = new Rectangle($height, $width);

echo $rectangle->getArea()."<br>";
echo $rectangle->getPerimeter()."<br>";
echo $rectangle->display();
