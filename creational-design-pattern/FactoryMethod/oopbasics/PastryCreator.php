<?php

abstract class PastryCreator
{
  abstract public function MakePastry();

  public function thisIsPastry(){
    return ($this->MakePastry());
  }




}



?>
