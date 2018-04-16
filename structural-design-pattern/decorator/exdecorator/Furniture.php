<?php

class Furniture extends Decorator
{
   protected $houseFurnitures;
   public function __construct(IHouse $houseNow)
   {
     $this->houseFurnitures = $houseNow;
    //  $this->houseFurnitures->color; // modified the property of the house structure;
    //  $this->houseFurnitures->structure;
   }

   public function getFurniture()
   {
      $addedProperties = "<b>House with this " . $this->houseFurnitures->getColor() . " color ";
      $addedProperties .= " and " . $this->houseFurnitures->getStructure(). " structure now has Black Chairs</b>";
      return $addedProperties;
   }

   public function getColor()
   {
     return $this->houseFurnitures->getColor();
   }

   public function getStructure()
   {
     return $this->houseFurnitures->getStructure();
   }
}




 ?>
