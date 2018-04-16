<?php

class TextProduct implements Product
{
  private $textProduct;

  public function getProperties()
  {
    $this->textProduct = "<div style='color:#cc0000; font-size:12px; font-family:Verdana, Geneva sans-serif'>
                          <strong><em>Caption: </em></strong>GOD UCHENNA, GOODNEWS SPREADER </div>";
    return $this->textProduct;
  }
}


 ?>
