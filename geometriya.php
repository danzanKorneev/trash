<?php
abstract class Figur{
    abstract public function getSquare();
    abstract public function getPerimeter();
    public function getSquarePerimeterSum(){
       return $this->getSquare()+$this->getPerimeter();
    }

}
interface iFigur{
    public function getSquare();
    public function getPerimeter();

}
class Rectangle implements iFigur{
    private $a;
    private $b;
    public function __construct($a,$b)
    {   $this->a=$a;
        $this->b=$b;
        
    }
    public function getSquare()
    {
        return $this->a*$this->b;
    }
    public function getPerimeter()
    {
        return $this->a*2+$this->b*2;
    }
}
class Quadr implements iFigur{
    private $a;
    public function __construct($a)
    {
        $this->a=$a;
    }
    public function getSquare()
    {
        return $this->a*$this->a;
    }
    public function getPerimeter()
    {
        return 4*$this->a;
    }

}
class FiguresCollection{
    private $arr=[];
    public function add(iFigur $figur){
        $this->arr[]=$figur;
    }
    public function getTotalSquare(){
        $sum=0;
        foreach($this->arr as $r){
            $sum+=$r->getSquare();
        }
        return $sum;
    }
    public function getTotalPerimiter(){
        $sum=0;
        foreach($this->arr as $r){
            $sum+=$r->getPerimeter();
        }
        return $sum;
    }
}
interface iCube{
    public function __construct($a);
    public function vCube();
    public function pCube();
}
class Cube implements iCube{
    private $a;
    public function __construct($a)
    {
        $this->a=$a;
    }
    public function vCube()
    {
        return pow($this->a,3);
    }
    public function pCube()
    {
        return 6*pow($this->a,2);
    }
}
$cub= new Cube(2);
echo $cub->pCube();