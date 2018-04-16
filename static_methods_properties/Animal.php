<?php

class Animal
{

  const MALE = "male animal";
  private $name = 'uchenna';
  private $age = 3200;
  private $color = 'brown';

}

$animal = new Animal;

echo $animal::MALE;
echo "<pre>";
echo var_dump($animal) . "</br>";
echo "</pre>";

echo "GODS CREATE!"
?>
