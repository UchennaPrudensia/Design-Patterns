<?php

function __autoload($class_name)
{
  include_once($class_name . ".php");
}


class Client
{
  private $allUsers = array();

  public function __construct()
  {

      $user = new User('GOD', 'Uchenna', 6732);
      // $user2 = new User('GOD', 'Jude', 8900);
      //
      // $allUsers[] = $user1;
      // $allUsers[] = $user2;


      $verify = new Verify();
      //$verify->templateMethod($user);
      $verify->templateMethod($user);

  }


}

$worker=new Client();




 ?>
