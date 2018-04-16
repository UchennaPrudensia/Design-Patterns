
<?php

include_once('EuroCalc.php');
include_once('ITarget.php');

class RupeeAdapter extends EuroCalc implements ITarget
{
  public function __construct()
  {
    $this->requester();
  }

  public function requester()
  {
    $this->rate=65.89;
    return $this->rate;
  }





}







?>
