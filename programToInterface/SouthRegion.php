<?php


class SouthRegion extends IAbstract
{
  protected function giveCost()
  {
    $this->valueNow = 300;
    return $this->valueNow;
  }

  //Must return string value;
  protected function giveCity()
  {
    return "The South";
  }
}






 ?>
