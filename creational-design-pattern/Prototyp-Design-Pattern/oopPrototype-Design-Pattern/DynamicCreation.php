<?php


//instantiate a class to a variable;

class Animal
{
     public $name;
     public $color;

     public function __construct($name, $color)
     {
       $this->name = $name;
       $this->color = $color;
     }

     public function getProperties()
     {
       $str = "Animal: $this->name</br>";
       $str .= "Color: $this->color</br></br>";
       return $str;
     }
}

echo "Creating Object directly </br>";
$dog = new Animal("Dog", "Brown");
echo $dog->getProperties();

echo "Creating  Indirectly (4RM variable to class) </br>";
$className = 'Animal';
$myCat = $className;
$cat = new $myCat("Cat", "White");
echo $cat->getProperties();

echo "Creating  Indirectly (4RM variable to class) </br>";
$className = 'Animal';
$myCat = $className;
$cat = new $myCat("Monkey", "Yellow");
echo $cat->getProperties();





 ?>
