<?php
//method_chaining

class ABC{
    public $value ="Hello I am value properties of class ABC";
}

class XYZ{
    public $abc;
    public function __construct()
    {
      $this->abc = new ABC;  
    }
}

$obj = new XYZ;
echo $obj->abc->value;

//method_chaining

class Prem{
    public function fun1(){
        echo "I am fun1() from Prem class";
        return $this;
    }
    public function fun2(){
        echo "I am fun2() from Prem class";
        return $this;
    }
    public function fun3(){
        echo "I am fun3() from Prem class";
        return $this;
    }
}

$objPre = new Prem;

// this is called method chaining
$objPre->fun1()->fun2()->fun3();

?>