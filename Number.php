<?php
class Number{
    private $numbers = [];
    public function add($num){
        foreach($num as $nu){
            $this->numbers[]=$nu;
        }
    }
    public function getSum(){
        return array_sum($this->numbers);
    }
}
$n1=new Number;
$n1->add([1,2,3,4]);
$n1->add([1,2,3]);
echo $n1->getSum();