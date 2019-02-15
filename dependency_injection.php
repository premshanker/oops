<?php
class Logger{
    public function Log($message){
        echo "Login message ".$message;
    }
}

class UserInfo{

    private $logger;
    public function Createuser(){
        
        $this->logger->Log("User Created");
    }
    public function Updateuser(){
        
        $this->logger->Log("User updated");
    }
   /* public function __construct()
    {
        $this->logger = new Logger;
        
    }*/
    public function __construct(Logger $object)
    {
        $this->logger = $object;
        
    }
}
$logger = new Logger;
$ajay=new UserInfo($logger);
$ajay->Createuser();
$ajay->Updateuser();
?>