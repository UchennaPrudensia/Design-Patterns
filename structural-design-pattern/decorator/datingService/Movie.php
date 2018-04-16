<?php

class Movie extends Decorator
{
  private $movieNow;

  public function __construct(IComponent $dateNow)
  {
    $this->date = $dateNow;
  }

  private $movie = array("scifi" => "Science Fiction",
                  "rom"   => "Romance",
                  "thril" => "Thriller",
                  "act"   => "Action");

   public function setFeature($mov)
   {
     $this->movieNow = $this->movie[$mov];
   }

   public function getFeature()
   {
     $output = $this->date->getFeature();
     $fmat  = "<br/>&nbsp;&nbsp;";
     $output .= "$fmat Preferred Movies: ";
     $output .= $this->movieNow . "<br/>";
     return $output;
   }
}




 ?>
