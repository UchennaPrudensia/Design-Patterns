<?php

function __autoload($class_name)
{
  include_once($class_name . ".php");
}

class Client
{
    public $house;
    // private $furniture;
    // private $fridge;

    public function __construct()
    {
      //$this->house = new Fridge(new Furniture(new House()));
      $this->house = new House();
      // $this->furniture = new Furniture(new House());
      // $this->fridge = new Fridge($this->furniture);
      //$this->house = new Fridge(new Furniture(new House()));
      $this->house = $this->wrapComponent($this->house);

      $houseProperties = "House Color: " . $this->house->getColor() . "</br>";
      $houseProperties .= "House Structure: " . $this->house->getStructure();
      // $housePropertieswithAddedFurniture = $this->furniture->getFurniture();
      // $housePropertieswithAddedFridge = $this->fridge->getFurnitureFridge();
      $housePropertieswithAddedFurniture = $this->house->getFurniture();
      $housePropertieswithAddedFridge = $this->house->getFurnitureFridge();


      echo $houseProperties ;
      echo "<br/><br/>";
      echo $housePropertieswithAddedFurniture;
      echo "<br/><br/>";
      echo $housePropertieswithAddedFridge;

      echo "<pre>";
      echo var_dump($this->house);
      echo "</pre>";

    }

    private function wrapComponent(IHouse $house)
    {
      // $component=new Maintenance($component);
      // $component=new DataBase($component);
      // $component=new Video($component);

      $house=new Fridge(new Furniture($house));

      return $house;
    }
}

$house = new Client();

echo "<br/><br/>";
echo "<pre>";
echo var_dump($house);
echo "</pre>";




 ?>
