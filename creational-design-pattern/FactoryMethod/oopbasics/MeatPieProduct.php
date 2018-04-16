<?php

class MeatPieProduct implements Product
{
  private $meatpie;
  public function getProperties()
  {
    $this->meatpie = "This is meatpie";
    return $this->meatpie;
  }
}




 ?>
