<?php
class Product{
    private $name;
    private $prise;
    private $quanity;
    public function __construct($name,$prise,$quanity)
    {
        $this->name=$name;
        $this->prise=$prise;
        $this->quanity=$quanity;

    }
    public function getQuanity(){
        return $this->quanity;
    }
    public function getCost(){
        return $this->prise*$this->quanity;
    }
    public function getName(){
        return $this->name;
    }

}
class Cart{
    public $product=[];
    public $pr=['name'=>''];
    public function add($product){
        $this->product[]=$product;
    }
    public function kjkszpj(){
        return count($this->product);
    }
    public function getTotalQuantity(){
        $sum = 0;
        foreach($this->product as $nn){
            $sum+=$nn->getQuanity();
        }
        return $sum;
    }
    public function getTotalCost(){
        $sum=0;
        foreach($this->product as $nn){
            $sum+=$nn->getCost();
        }
        return $sum;
    }
    public function getProduct(){
        return $this->product;
    }
    public function removde($name){
        foreach($this->product as $key=>$elem){
            if($elem->getName()==$name){
                unset($this->product[$key]);
            }
            }
        }
      public function getAvgPrice(){
          $sum=0;
          $qul=0;
          foreach($this->product as $nn){
              $sum+=$nn->getCost();
              $qul+=$nn->getQuanity();
          }
          return $sum/$qul;
      }
    }
  

    


$banan = new Product('banan',1,20);
$cart= new Cart;
$cart->add($banan);
$cart->add(new Product('dis',1,11));
$cart->add(new Product('jus',1,20));
echo $cart->getTotalCost();
echo $cart->getAvgPrice();
