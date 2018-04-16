<?php

class House extends IHouse
{
     public function __construct()
     {
       $this->color = "Brown";
       $this->structure = "Bungallow";
     }

     public function getColor()
     {
       return $this->color;
     }

     public function getStructure()
     {
       return $this->structure;
     }
}



 ?>
