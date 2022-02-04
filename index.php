
<?php
abstract class User{
  private $name;
  public function setName($name){
    $this->name=$name;
  }
  public function getName(){
    return $this->name;
  }
  abstract public function  increaseRevenue($value);
  abstract public function decreaseRevenue($value);
}

class Emplyee extends User{
  private $salary;
  public function __construct($salary)
  {
    $this->salary=$salary;
  }
  public function getSalary(){
    return $this->salary;
  }
  public function  increaseRevenue($value){
    $this->salary = $this->salary+$value;
  }
  public function decreaseRevenue($value){
    $this->salary = $this->salary-$value;
  }
}
class Student extends User{
  private $corse;
  private $scholarship;
  public function getCorse(){
    return $this->corse;
  }
  public function __construct($name,$corse)
  {
    $this->corse=$corse;
    parent::setName($name);
  }
  public function increaseRevenue($value){
    $this->scholarship=$this->scholarship+$value;
  }
  public function decreaseRevenue($value){
    $this->scholarship=$this->scholarship-$value;
  }
}

$s1= new Student('данзан',1);
$s2 = new Emplyee(1000);
$s2->setName('Миша');
$s2->increaseRevenue(1000);
$s2->decreaseRevenue(500);
echo $s2->getSalary();