<?php
declare(strict_types=1);
class AC{
    protected $model;
    public $speed;

    public function __construct(string $model, int $speed) {
        $this->model = $model;
        $this->speed = $speed;
        print "In BaseClass constructor\n";
    }

    public function speedUp(){
        $this->speed++;
    }
    public function speedDown(){
        $this->speed--;
    }
   public function setModel(string $model){
       $this->model = $model;
   }
   public function getModel(){
    return $this->model;
   }
}

class SmartAc extends AC{
    
    public function setModel(string $model){
        parent::setModel();
        $this->model = $model;
    }
    public function getModel(){
     return $this->model;
    }
}

$utsav = new SmartAc('voltas', 16);
echo $utsav->getModel();
echo $utsav->speed;

?>

