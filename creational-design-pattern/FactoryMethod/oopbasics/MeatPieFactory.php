<?php
include_once('PastryCreator.php');
include_once('MeatPieProduct.php');

class MeatPieFactory extends PastryCreator
{
  public function MakePastry()
  {
    $makepastry = new MeatPieProduct();
    return $makepastry->getProperties();
  }
}




?>
