<?php

// function Calculate($a, $b)
// {
//   $a = $b + $a;
//   $a = $a + 7;
//   $a = $a + 10;
//   $a = $a + 10;
//   return $a;
// }
//
// echo "Caluculate: " . Calculate(5, 6);

class Human1
{
  public $name;

  public function __construct()
  {
   $this->name = "Hesso (from human1 class) </br>";
  }

  public function getName()
  {
    return $this->name->getName();
  }

}

class Human2 extends Human1
{
  public function __construct($obj)
  {
   $this->name = $obj;
   echo "<pre>";
   echo var_dump($obj);
   echo "</pre>";

  }

  public function getName()
  {
    $carr = $this->name->getName() . "+10 (from human2 class) </br>";
    echo "<pre>";
    echo var_dump($carr);
    echo "</pre>";

    //return $this->name->getName() . "+10 (from human2 class) </br>";
  }
}

class Human3 extends Human1
{
  public function __construct($obj)
  {
    $this->name = $obj;
  }

  public function getName()
  {
    return $this->name->getName() . "+30 (from human3 class) </br>";
  }
}

$human = new Human3(new Human2(new Human1()));
//$container = $human->getName();

echo "<pre>";
echo var_dump($human);
echo "</pre>";





 ?>
