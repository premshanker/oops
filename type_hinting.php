<?php

//type_hinting
class ABC{
    public function demo(){
        echo "I am from abc class";
    }
}

class XYZ{
    public function demo1(){
        echo "I am from xyz class";
    }
}

function test(ABC $obj){

    $obj->demo();
}

$obj = new ABC;
//$obj = new XYZ;
test($obj);
?>