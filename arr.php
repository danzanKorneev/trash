<?php
class arr{
private $umber=[];
public function add($num){
    $this->number[]=$num;
}
public function __toString()
{
    return (string) array_sum($this->number);
}
}
$d1=new arr;
$d1->add(1);
$d1->add(2);
$d1->add(1);
echo $d1;