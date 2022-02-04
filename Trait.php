<?php
trait T1{
    private function geto(){
        return 1;
    }
    private function getd(){
        return 2;
    }
}
trait T2{
    use T1;
    private function gett(){
        return 3;
    }
}
class test{
    use T2;
   public function getSum(){
       return $this->geto()+$this->getd()+$this->gett();
   }
}
var_dump(get_declared_traits());