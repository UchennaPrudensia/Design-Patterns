<?php

function __autoload($class_name)
{
  include_once($class_name . ".php");
}

class Client
{


  public function __construct()
  {
    $caption = "ModigLiani GOD Uchenna Style";
    $GODUc = new ConcreteClass();
    $GODUc->templateMethod("modig.png", $caption);
  }

}

$worker=new Client();


 ?>
