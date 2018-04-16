<?php

class TMFac extends TmAb
{
  protected function addPix()
  {
    $this->pix = new GraphicFactory();
    echo $this->pix->doFactory();
  }

  protected function addCap()
  {
    $this->cap = new TextFactory();
    echo $this->cap->doFactory();
  }
}


 ?>
