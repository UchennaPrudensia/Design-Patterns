<?php
include_once('Fruitstore.php');
include_once('CitrusStore.php');

class UseProducts
{
 public function __construct()
 {
  $applesauce = new FruitStore();
  $orangeJuice = new CitrusStore();

  $this->doInterface($applesauce);
  $this->doInterface($orangeJuice);
 }

function doInterface(Iproduct $product){  //typehint
  echo $product->apples();
  echo $product->oranges();
}



}


$worker = new UseProducts();
//echo $worker;





?>
