<?php
interface Test1{

}

interface iCircle{
    public function getRadius();
    public function getDiametr();
}
interface iTetragon
{
    public function getA();
    public function getB();
    public function getC();
    public function getD();
}
interface Figur3d{
    function getVolum();
   function getSurfaceSquare();
}
interface iFigure{
   function getSquare();
   function getPerimetr();
}
class Quadrate implements iFigure, iTetragon
{   private $a;
    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->a;
    }
    public function getC(){
        return $this->a;
    }
    public function getD(){
        return $this->a;
    }
    public function getPerimetr()
    {
        return 4*$this->a;
    }
    public function __construct($a){
        $this->a=$a;
    }
    public function getSquare(){
        return pow($this->a,2);
    }
    
}
class Rectangle implements  iFigure,iTetragon{
    private $a;
    private $b;
    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->b;
    }
    public function getC(){
        return $this->a;
    }
    public function getD(){
        return $this->c;
    }

    public function getPerimetr()
    {
        return 2*($this->a+$this->b);
    }
    public function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    public function getSquare(){
        return $this->a*$this->b;
    }

}

class cube implements Figur3d{
    private $a;
    public function __construct($a)
    {   
        $this->a=$a;
        
    }
    public function getVolum()
    {
        return pow($this->a,3);
    }
    public function  getSurfaceSquare(){
        return 6*pow($this->a,2);
    }
}
class Disk implements iFigure ,iCircle{
    private $radius;
    public function __construct($radius)
    {  
        $this->radius=$radius;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function getDiametr(){
        return 2*$this->radius;
    }
     public  function getSquare(){
        return 3.14*pow($this->radius,2);
     }
    public function getPerimetr(){
        return 2*3.14*$this->radius;
    }

}
interface iSphere
{
    const PI = 3.14; // число ПИ как константа
    
    // Конструктор шара:
    public function __construct($radius);
    
    // Метод для нахождения объема шара:
    public function getVolume();
    
    // Метод для нахождения площади поверхности шара:
    public function getSquare();
}

class Sphere implements iSphere{
    private $radius; 
    public function __construct($radius){
        $this->radius=$radius;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function getVolume(){
        return 3/4*self::PI*pow($this->radius,3);
    }
    public function getSquare(){
        return 4*self::PI*pow($this->radius,2);
    }

}
print_r(get_declared_interfaces());
