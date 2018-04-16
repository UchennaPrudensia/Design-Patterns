<?php

include_once("Car.php");
include_once("Wheel.php");

class Client
{

  private $car; //car object
  private $wheel;


  public function __construct()
  {
    $car = $this->car = new Car("Pink", "Bentley", new Wheel('Red', 'Triangle', '678lbs'));
    echo $car->getProperties();


  }
}
$worker = new Client();

// echo '<pre>';
// var_dump($worker);
// echo '</pre>';

?>
