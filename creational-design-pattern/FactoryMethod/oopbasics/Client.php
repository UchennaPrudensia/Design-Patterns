<?php

include_once('CakeFactory.php');
include_once('MeatPieFactory.php');

class Client
{

  public function __construct()
  {
    $cake = new CakeFactory();
    echo $cake->thisIsPastry() . "</br>";
    $meatpie = new MeatPieFactory();
    echo $meatpie->thisIsPastry() . "</br>";
  }

}

$worker = new Client();





?>
