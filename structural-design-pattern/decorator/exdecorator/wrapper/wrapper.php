<?php

class Wrapper
{
  private $wrapme;

  public function __construct($wrapmeNow)
  {
    $this->wrapme = $wrapmeNow;
  }

  public function getWrapMe()
  {
    return $this->wrapme;
  }

}

$myString = "LORD UCHENNA";

$wrapmeobj = new Wrapper($myString);
echo $wrapmeobj->getWrapMe();






 ?>
