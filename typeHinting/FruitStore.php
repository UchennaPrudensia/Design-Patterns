<?php
include_once('Iproduct.php');

//Fruitstore implements Iproduct;

class FruitStore implements Iproduct{
  public function apples(){
    return "FruitStore: Apples in stock . <br/>";
  }

  public function oranges(){
    return "FruitStore: Oranges not in stock . <br/>";
  }
}














































 ?>
