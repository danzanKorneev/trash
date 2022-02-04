<?php
trait Helper{
    private $name;
    private $age;
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }

}
class Country{
    use Helper;
    private $population;
    public function __construct($name,$age,$population)
    {
        $this->name=$name;
        $this->age=$age;
        $this->population=$population;
    }
    public function getPopolation(){
        return $this->population;
    } 
}
$K1= new Country("Amerika",1000,200201020);
var_dump($K1->getPopolation());