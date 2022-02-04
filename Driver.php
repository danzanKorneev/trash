<?php
require 'Employee.php';
class Driver extends Employee{
   private $experience;
   private $category=[];
   public function getExperience(){
       return $this->experience;
   }
   public function setExperience($experience){
       $this->experience=$experience;
   }
   public function getCategory(){
       return $this->category;
   }
   public function setCategory($cat){
       $this->category=$cat;
   }
}
$dr1= new Driver('жека','Иванов',100000);
$dr1->setExperience(12);
$dr1->setCategory(['A','B']);
echo $dr1->getExperience();
foreach($dr1->getCategory() as $add){
    echo $add;
}