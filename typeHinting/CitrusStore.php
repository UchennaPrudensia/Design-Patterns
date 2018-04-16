<?php
include_once("Iproduct.php");

class CitrusStore Implements Iproduct{
  public function apples(){
    return "CitrusStore: we dont deal with apples . <br/>";
  }
  public function oranges(){
    return "CitrusStore: we have orange fruit . <br/>"; 
  }
}


 ?>
