<?php

include_once('AbstractClass.php');

class ConcreteClass extends AbstractClass
{
  protected function addPix($pix)
  {
    $this->pix = $pix;
    $this->pix = "../pix/". $this->pix;  // (this->pix): now a url
                                      //notice how you have changed the state of (this->pix);
    $formatter = "<img src=$this->pix></br>";
    echo $formatter;
  }

  protected function addCap($cap)
  {
    $this->cap = $cap;
    echo "<em>Caption:</em>" . $this->cap . "<br/>";
  }

  protected function addButton()
  {
    echo "<button type='button'>Press Me</button>";
  }
}




 ?>
