<?php
declare(strict_types=1);
class AC{
    //private $model;
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
    public function getModel(){//accessor function getter method
        return $this->model;
    }
    public function setModel(string $model){//accessor function getter method
        return $this->model = $model;
    }
}

class SmartAc extends AC{
    public $wifi = 'Available';

    public function __construct(){
        parent::__construct('Samsung', 18);
    }
    public function getModel(){//accessor function getter method
        return $this->model;
    }
    
}

$utsav = new AC('voltas', 16);


$utsav->setModel('LG');
echo $utsav->getModel(); 

echo $utsav->speed;

$swasti = new SmartAc('voltas', 17);

$utsav->speedDown();

echo $swasti->wifi;

echo $swasti->getModel();
echo $swasti->speed;

?>

