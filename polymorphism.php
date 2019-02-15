<?php
declare(strict_types=1);
//polymorphism

interface Shape{
    public function calArea();
}
class Rectangle implements Shape{
    public $lenth;
    public $breadth;

    public function calArea()
    {
        return $this->lenth * $this->breadth;
    }

    public function __construct(int $l, int $b)
    {
        $this->lenth = $l;
        $this->breadth = $b;
    }
}
class Circle implements Shape{
    private $radious;
    public function __construct(int $r)
    {
        $this->radious = $r;
        
    }
    public function calArea()
    {
        return 3.14*$this->radious*$this->radious;
    }
}

$objRec = new Rectangle(23, 45);
echo $objRec->calArea();

$objCir = new Circle(8);
echo '<br />'.$objCir->calArea();
?>