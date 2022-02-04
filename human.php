<?php
class Post{
    public $name;
    public $salary;
    public function __construct($name,$salary)
    {   
        $this->salary=$salary;
        $this->name=$name;
        
    }
    public function getName(){
        return $this->name;
    }
    public function getSalary(){
        return $this->salary;
    }
}
class Human{
    private $name;
    private $surname;
    private $post;
    private $salary;
    public function __construct($name, $surname,Post $post){
        $this->post=$post->getName();
        $this->salary=$post->getSalary();
        $this->name=$name;
        $this->surname=$surname;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function setSurname($surname){
        $this->surname=$surname;
    }
    public function getSurname(){
       return $this->surname;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function getPost(){
        return $this->post;
    }


}
$post1=new Post('Програмист',60000);
$post2=new Post('Инженер',100000);
$hum1 = new Human('Саша','Дорн',$post1);
echo $hum1->getPost();
