<?php

include_once("IWheel.php");

class Car{

public $color;
public $wheel;
public $model;

public function __construct($color, $model, IWheel $wheel)
{
  $this->color = $color;
  $this->model = $model;
  $this->wheel = $wheel;
}

public function getProperties()
{
  $str = "Car has color $this->color. It's model is $this->model and
          has following wheel property:  <br/>";
  $str .= $this->getWheelProperties();
  return $str;
}

public function getWheelProperties()
{
  $str = $this->wheel->getWheel();
  return $str;
}


}





// $worker = new Car("red", "toyota");
// echo $worker->getProperties();



 ?>
