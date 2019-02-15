<?php

//overloading and overriding
class Test{
 
    private $count;
    public function __construct()
    {
        echo 'Implements function overloading';
    }

    public function __call($name, $arguments)
    {
        if($name=='overLoads'){
            $this->count = count($arguments);
            switch($this->count){
                case "1":
                echo "One argument";
                break;
                case "2":
                echo "Two argument";
                break;
                case "3":
                echo "Three argument";
                break;
                default:
                echo "You have enter invalid argument";
                break;
            }
        }
    }
}

$objTest = new Test;
//$objTest->overLoads("Prem");
//$objTest->overLoads("Prem", 33);
//$objTest->overLoads("Prem", 33,"age");
//$objTest->overLoads("Prem", 33, "age", 44);


/// for overriding concept
class Overriding{
    public function show($a){
        echo $a. ' in parent class';
    }
}
class Chiled extends Overriding{
    public function show($a){
       // parent::show($a);
        echo $a. '<br /> in Chield class ';
    }
}

$objChi = new Chiled();
$objChi->show('I am Prem');

$objOve = new Overriding;

$objOve->show('I am Utsav');
?>