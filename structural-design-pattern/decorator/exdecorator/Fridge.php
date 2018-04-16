<?php


class Fridge extends Decorator
{
   protected $houseFridge;

  public function __construct(IHouse $houseNow)
  {
    $this->houseFridge = $houseNow;
  }

  public function getFurnitureFridge()
  {
    $furnituteandfridge = $this->getFurniture();
    $furnituteandfridge .=  "<b> Some bad Ass IOT Fridge </b> ";
    return $furnituteandfridge;
  }

  public function getFurniture()
  {
    return $this->houseFridge->getFurniture();
  }

  public function getColor()
  {
    return $this->houseFridge->getColor();
  }

  public function getStructure()
  {
    return $this->houseFridge->getStructure();
  }

}



 ?>
