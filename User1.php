<?php
interface iUser1{
    public function __construct($name,$age);
    public function getName();
    public function getAge();

}
class User1 implements iUser1{
    private $name;
    private $age;
    public function __construct($name,$age)
    {   
        $this->name=$name;
        $this->age=$age;
        
    }
    public function getName()
    {
        return $this->name;
    }
  
    public function getAge()
    {
        return $this->age;
    }
  
}