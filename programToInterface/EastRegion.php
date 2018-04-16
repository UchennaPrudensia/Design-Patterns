<?php

include_once('IAbstract.php');

class EastRegion extends IAbstract
{

//Must return decimal value
protected function giveCost()
{
  return $this->valueNow = 450;
}

//Must return string value;
protected function giveCity()
{
  return 'Easthern';
}



}
