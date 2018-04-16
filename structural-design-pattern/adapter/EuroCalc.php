<?php

class EuroCalc
{

  private $euro;
  private $product;
  private $service;
  public $rate=1;

  public function requestCal($productNow, $serviceNow)
  {
    $this->product = $productNow;
    $this->service = $serviceNow;
    $this->euro = $this->product + $this->service;
    return $this->requestTotal();

  }

  public function requestTotal() //conversting euro to dollars
  {
    $this->euro *= $this->rate;
    return $this->euro;
  }
}






 ?>
