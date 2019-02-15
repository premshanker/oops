<?php
class DBDemo{

    protected static $table='BaseDemoTable';
    public function select(){
        echo "select * from ".static::$table;
    }
    public function insert(){
        echo "insert into ".self::$table;
    }
}

class Student extends DBDemo{
    public static $table='StudentsTable';
}
class Feedback extends DBDemo{
    public static $table='FeedbacksTable';
}
$obj1 = new DBDemo;
$obj1->select();
$obj2 = new Student;
$obj2->select();
$obj3 = new Feedback;
$obj3->select();
?>