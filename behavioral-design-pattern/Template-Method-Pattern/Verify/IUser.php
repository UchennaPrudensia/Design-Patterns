<?php
abstract class IUser
{
  protected $firstname;
  protected $lastname;
  public $code;

  abstract public function getNames();

}

 ?>
