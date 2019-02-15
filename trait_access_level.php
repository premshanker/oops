<?php
// trait access lavel

trait t{
    private function show(){
        echo 'i am from trait ';
    }
}

class Demo{
    use t{
        //t::show as public;
        t::show as public prem;
    }
}

$objDem = new Demo();

//$objDem->show();

$objDem->prem();
?>