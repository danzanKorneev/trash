<?php
require 'Employee.php';
class Programmer extends Employee{
    private $langs=[];
    public function getLangs(){
        return $this->langs;
    }
    public function setlangs($langs){
        $this->langs=$langs;
    }

}
$sw1=new Programmer('Дима','белов','100000');
$sw1->setlangs(['php','java','python']);
foreach($sw1->getLangs() as $ss){
    echo $ss;
}