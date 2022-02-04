<?php
class User3{
    private $name;
    private $age;
    public function __get($property)
    {
      return  $this->$property ;
    }
    public function __set($property,$value){
        switch($property){
            case 'name':
                if($property !=''){
                    $this->$property=$value;
                }
            break;
            case 'age':
                if($property>=0 and $property<=70){
                    $this->$property=$value;
                }  
            break;
            default:
            break;       

        }
    }
}
$user2412 = new User3;
$user2412->name="Даша";
$user2412->age=23;
echo $user2412->name;