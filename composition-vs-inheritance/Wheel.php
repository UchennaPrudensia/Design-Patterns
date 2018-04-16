<?php

include_once("IWheel.php");

class Wheel implements IWheel
{

private $color;
private $shape;
private $weight;

public function __construct($color, $shape, $weight)
{
  $this->color = $color;
  $this->weight = $weight;
  $this->shape = $shape;
}

public function getWheel()
{
  $str = "Wheel Properties <br/>";
  $str .= "Color: $this->color, Weight: $this->weight, Shape: $this->shape ";
  return $str;
}

}


 ?>
