<?php
include_once("Product.php");

class CakeProduct implements Product
{
  private $cake;
  public function getProperties()
  {
    $this->cake = "This is cake";
    return $this->cake;
  }
}




 ?>
