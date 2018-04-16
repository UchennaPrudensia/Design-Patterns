<?php

// function autoload($class_name)
// {
//   include_once($class_name . ".php");
// }

include_once("EuroAdapter.php");
include_once("DollarCalc.php");
include_once("RupeeAdapter.php");

class Client
{
  private $requestNow;
  private $dollarRequest;

  public function __construct()
  {
    $this->requestNow= new EuroAdapter();
    $this->dollarRequest=new DollarCalc();
    $this->rupeeRequest = new RupeeAdapter();
    $euro="&#8364;";
    $rupee="&#8377;";
    echo "Euros: $euro" . $this->makeAdapterRequest($this->requestNow) ."<br/>";
    echo "Rupee: $rupee" . $this->makeAdapterRequest($this->rupeeRequest) ."<br/>";
    echo "Dollars: $" . $this->makeDollarRequest($this->dollarRequest);
  }

  private function makeAdapterRequest(ITarget $req)
  {
    return $req->requestCal(40,50);
  }

  private function makeDollarRequest(DollarCalc $req)
  {
    return $req->requestCal(40,50);
  }
}

$worker=new Client();





 ?>
