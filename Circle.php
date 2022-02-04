<?php
class Test1{
    private $name='name';
    private $salary='salary';
    public $pop1=1;
    public $pop2=2;

public function pokaji(){
    return get_class_vars(get_class($this));
    
            
}
public function rasskaji(){
    return get_object_vars($this);
}
    public function getName(){
        return $this->name;
    }
    public function metod2(){
        return 'hi';
    }
    public function metod1(){
        return true;
    }

}
var_dump( class_exists('Test1'));
var_dump(class_exists('Test2'));