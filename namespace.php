<?php

//A namespace allows you to place a bunch of code under a name and not have any naming conflicts
// with classes, functions and constants.

//It allows your code to live in that namespace

// if you create namespace with name and create class under the namespace you will have to create
// object within the namespace because class treat as local for the namespace

// if you create namespace without name then you can create object of other namespace class

namespace abc{
    class xyz{
        public function __construct(){
            echo 'xyz class from abc namespace';
        }
    }
}

namespace{
    class xyz{
        public function __construct(){
            echo 'hello I am from xyz class';
       }
    }

    //use abc\xyz as demo;// method 1
    
    //$obj = new demo();
    $obj = new abc\xyz();// method 2
    $obj1 = new xyz();
}
?>