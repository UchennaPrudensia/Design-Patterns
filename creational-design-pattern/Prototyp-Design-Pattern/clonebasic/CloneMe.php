<?php

abstract class CloneMe
{
  public $name;
  public $picture;
  abstract function __clone();
}

class Person extends CloneMe
{

public function __construct()
{
  $this->picture = 'cloneuche.png';
  $this->name = "Orginal";

  echo "<p>I am here...</p>";
}

public function display()
{
  echo "<img src='$this->picture'>";
  echo "<br/><p>$this->name<p/>";
}

function __clone(){}

}

$worker = new Person();
$worker->display();

$slacker = clone $worker;
$slacker->name = "Cloned";
$slacker->display();




 ?>
