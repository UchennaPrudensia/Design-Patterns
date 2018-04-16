<?php
abstract class AbstractClass
{
  protected $pix;
  protected $cap;

  public function templateMethod($pixNow, $capNow)
  {
    $this->pix = $pixNow;
    $this->cap = $capNow;

    //$this->addCap($this->cap);
    $this->addPix($this->pix);   // you are calling them from inside the template
    $this->addCap($this->cap);  // --method
  }

  abstract protected function addPix($pix);
  abstract protected function addCap($cap);
}


 ?>
