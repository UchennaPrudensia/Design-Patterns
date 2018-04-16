<?php

abstract class TmAb
{
  protected $pix;
  protected $cap;

  public function templateMethod()
  {
    $this->addPix();
    $this->addCap();  // calling operation in the order;
  }

  abstract protected function addPix();
  abstract protected function addCap();
}




 ?>
