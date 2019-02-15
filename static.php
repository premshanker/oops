<?php
// we use self key word with ::(scoperesolation) for accessing static variable and method
// did not require class object to access the static method and properties
// we use class name with :: and method
// we can't access static method and properties in non static method 
class IRCTC{
    public static $count = 0;
    public static function getCount(){
        return self::$count;
    }
    public function __construct(){
        self::$count++;
    }
    
}
class xyz extends IRCTC{
    static function getCount()
    {
        return parent::getCount();
    }
}

$ajay = new xyz;
$amod = new xyz;
$utsav = new xyz;
$prem = new IRCTC;
echo xyz::getCount();
echo IRCTC::getCount();
?>