<?php

//Concrete Decorator;

class Food extends Decorator
{
  private $chowNow;

  public function __construct(IComponent $dateNow)
  {
    $this->date = $dateNow;
  }

  private $snacks=array("piz"=>"Pizza",
                          "burg" => "Burgers",
                          "nach" => "Nachos",
                          "veg" => "Veggies");

  public function setFeature($yum)
  {
    $this->chowNow = $this->snacks[$yum];
  }
  public function getFeature()
  {
    $output=$this->date->getFeature();
    $fmat = "<br/>&nbsp;&nbsp;";
    $output .= "$fmat Favorite food: ";
    $output .= $this->chowNow;
    return $output;
  }
}




 ?>
