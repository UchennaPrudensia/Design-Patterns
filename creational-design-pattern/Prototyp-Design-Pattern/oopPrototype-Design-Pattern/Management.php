<?php

include_once('OfficePrototype.php');

class Management extends OfficePrototype
{
 const UNIT="Management";
 private $research="research";
 private $plan="planning";
 private $operations="operations";

 public function setDept($orgCode)
 {
   switch ($orgCode)
   {
     case 201:
     $this->dept=$this->research;
     break;

     case 202:
     $this->dept=$this->planning;
     break;

     case 203:
     $this->dept=$this->operations;
     break;

     default:
     $this->dept="Unrecognized Management";
   }

 }

 public function getDept()
 {
   return $this->dept;
 }

 function __clone(){}

}





 ?>
