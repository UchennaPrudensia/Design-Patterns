<?php


//Maintenance.php
//concerete decorator;

class Maintenance extends Decorator
{

  public function __construct(IComponent $siteNow)
  {
    $this->site = $siteNow;
    //$this->maintenance = $siteNow;
  }

  public function getSite()
  {
    $fmat="<br/>&nbsp;&nbsp; Maintenance ";
    //return $this->maintenance->getSite();
    return $this->site->getSite() . $fmat;

  }

  public function getPrice()
  {
    return 950 + $this->site->getPrice();
    //return 950 + $this->maintenance->getPrice();
  }
}

?>
