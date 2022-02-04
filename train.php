<?php
trait Train1{
public function method(){
    return 1;
}
}
trait Train2{
public function method(){
    return 2;
}
}
trait Train3{
public function method(){
    return 3;
}
}
class Train{
    use Train1,Train2,Train3{
        Train1::method insteadOf Train2;
        Train1::method insteadOf Train3;
        Train2::method as method2;
        Train3::method as method3;
    }
    
    public function getSum(){
        return $this->method()+$this->method2()+$this->method3();
    }
}
$t1= new Train;
var_dump($t1->getSum());
