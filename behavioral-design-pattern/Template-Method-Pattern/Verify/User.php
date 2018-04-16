<?php


class User extends IUser
{
   public function __construct($firstname, $lastname, $code)
   {
     $this->firstname = $firstname;
     $this->lastname = $lastname;
     $this->code = $code;
   }

   public function getNames()
   {
     return $this->firstname . " " . $this->lastname;
   }
}


 ?>
