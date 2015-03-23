<?php //

include ('../model/config.php');


//the tenant for new applications
class Tenant {
    
    private $user_id;
    private $property_id;
    private $message;
    
    
    public function __construct($user_id, $property_id, $message) {
        
        $this->user_id = $user_id;
        $this->property_id = $property_id;
        $this->message = $message;
    }
    
    public function getuser_id(){
        return $this->user_id;
    }
    
    public function setuser_id($user_id){
        return $this->user_id = $user_id;
    }
    
    public function getproperty_id(){
        return $this->property_id;
    }
    
    public function setproperty_id($property_id){
        return $this->property_id = $property_id;
    }
    
    public function getmessage(){
        return $this->message;
    }
    
    public function setmessage($message){
        return $this->message = $message;
    }
}

?>


