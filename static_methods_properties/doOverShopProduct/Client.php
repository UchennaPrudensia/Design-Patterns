<?php

function __autoload($class_name)
{
  include_once($class_name.'.php');
}

class Client
{
  private $cdproduct;
  public function __construct()
  {
    $this->cdproduct = new CDProduct('Thriller', 'Micheal', 'Jackson', 30.35 , 3600 );
    echo $this->cdproduct->getSummaryLine();
  }
}

$worker = new Client();



 ?>
