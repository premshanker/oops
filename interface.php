<?php

// interface is a collection of abstract method no any constructor
// interface only has public method 
// not declare properties in interface

interface a{
    public function demo();
    
}
class demo implements a{
    function demo(){
        return 'hi dear';
    }
  function b(){
return 'hi prem';
  }  
}

$obj = new demo;
echo $obj->b();
echo $obj->demo();
?>