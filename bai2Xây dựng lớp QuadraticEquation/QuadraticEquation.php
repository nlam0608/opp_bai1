<?php
class QuadraticEquation
{
//Trường dữ liệu a, b, và c thuộc kiểu private int đại diện cho 3 hệ số.
    private $a;
    private $b;
    private $c;

//Phương thức khởi tạo với 3 tham số để khởi tạo các giá trị cho a, b và c.
    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

//Phương thức getter() cho a, b và c.
    public function getterA(){
        return $this->a;
    }

    public function getteB(){
        return $this->b;
    }

    public function getterC(){
        return $this->c;
    }

//Phương thức getDiscriminant() trả về delta theo công thức delta = b2 - 4ac.
    public function getDiscriminant(){
        $delta = $this->b * $this->b - 4 * $this->a * $this->c;
        return $delta;
    }

//Phương thức getRoot1() và getRoot2() trả về 2 nghiệm của phương trình là:

    public function getRoot1(){
        $root1 = (-$this->b+sqrt($this->getDiscriminant()))/(2*$this->a);
        return $root1;
    }

    public function getRoot2(){
        $root2 = (-$this->b-sqrt($this->getDiscriminant()))/(2*$this->a);
        return $root2;
    }
}