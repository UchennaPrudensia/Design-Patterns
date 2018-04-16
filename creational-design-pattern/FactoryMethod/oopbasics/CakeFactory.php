<?php
include_once('PastryCreator.php');
include_once('CakeProduct.php');

class CakeFactory extends PastryCreator
{
  public function MakePastry()
  {
    $makepastry = new CakeProduct();
    return $makepastry->getProperties();
  }
}




?>
