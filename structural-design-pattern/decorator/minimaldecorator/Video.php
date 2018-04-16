<?php

//Video.php
//Concrete decorator
class Video extends Decorator
{
  public function __construct(IComponent $siteNow)
  {
      $this->site = $siteNow;
  }
  public function getSite()
  {
      $calculation = 100 + 67;
      $fmat="<br/>&nbsp;&nbsp; Video  -(calculation: $calculation)";

      return $this->site->getSite() . $fmat;
  }
  public function getPrice()
  {
      return 350 + $this->site->getPrice();
  }
}





 ?>
