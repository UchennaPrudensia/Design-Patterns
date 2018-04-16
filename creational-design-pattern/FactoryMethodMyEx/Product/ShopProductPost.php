<?php

include_once("ProductPost.php");
include_once("Formatter.php");

class ShopProductPost implements ProductPost
{
  private $price;
  private $title;
  private $description;
  private $output;
  private $formatter;
  //private $formatter;

  public function __construct($title, $description, $price)
  {
    $this->title = $title;
    $this->description = $description;
    $this->price = $price;
  }

  public function getProperties()
  {
    $this->formatter = new Formatter();
    $this->output  =  $this->formatter->addTop();
    $this->output .= " <img src='image/shop/bicycle.png' class='pixRight'
                        width='600' height='304'>";
    $this->output .=  "<header>$this->title - $this->price </header>";
    $this->output .= "<p>$this->description</p>";

    return $this->output;



  }
}











 ?>
