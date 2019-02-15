<?php
//abstract class does not require abstract method but if abstract method 
//in a class then class
//must have abstract class. abstract class support construct.
abstract class Base{
    protected $fname;
    protected $lname;
    public function __construct(string $f, string $l){
        $this->fname = $f;
        $this->lname = $l;
    }
    abstract function GetMonthlysal();
    public function GetFullname(){
      return  $this->fname.' '.$this->lname;
    }
}

class RegularEmpluee extends Base{
    
    protected $anualsal;

   
    public function GetMonthlysal(){
        return $this->anualsal/12;
    }
    
}

class ParttimeEmplyee extends Base{
    
    protected $hourlysal;
    protected $totalhours;
   
    public function GetMonthlysal(){
      return  $this->hourlysal.$this->totalhours;
    }
}
$obj = new RegularEmpluee('Prem', 'Bajpayee');
echo $obj->GetFullname()."<br />";
$obj1 = new ParttimeEmplyee('Amod', 'Bajpayee');
echo $obj1->GetFullname()."<br />";
//$obj->demo1()."<br />";
?>