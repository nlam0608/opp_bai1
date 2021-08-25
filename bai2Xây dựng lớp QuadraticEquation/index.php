<?php

include_once ("QuadraticEquation.php");


$a = 1;
$b = 2;
$c = 3;

$number = new QuadraticEquation($a,$b,$c);

if ($number->getDiscriminant()>0){
    echo "phương trình có 2 nghiệm".$number->getRoot1()."x1".$number->getRoot2().'x2';
} elseif ($number->getDiscriminant()==0){
    echo ("phương trình có 1 nghiệm kép".$number = (-$b/(2*$a)));
}else{
    echo "phương trình vô nghiệm";
}
