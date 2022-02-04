<?php
interface iProgrammer
{
    public function __construct($name, $salary);
    public function getName();
    public function getSalary();
    public function getLangs();
    public function addLang($lang);
}
class Employee
{
    private $name;
    private $salary;
    
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getSalary()
    {
        return $this->salary;
    }
}
class Programmer extends Employee implements iProgrammer{
    private $lang=[];
    public function getLangs(){
        return $this->lang;
    }
    public function addLang($lang){
        $this->lang[]=$lang;
    }
}
$proger1 = new Programmer('Саша',1000);
$proger1->addLang('PHP');
$proger1->addLang('JAVA');
$proger1->addLang('C++');
foreach($proger1->getLangs() as $lang){
    var_dump($lang);
}
var_dump($proger1->getName());