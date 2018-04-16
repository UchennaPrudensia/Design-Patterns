<?php

include_once('CountryFactory.php');
include_once('KyrgyzstanProduct.php');
include_once('GermanyProduct.php');

class Client
{
  private $countryFactory;

  public function __construct()
  {
    //before
    // $this->countryFactory = new CountryFactory();
    // echo $this->countryFactory->doFactory(new KyrgyzstanProduct());

    //after
    $countryFactory = $this->countryFactory = new CountryFactory();
    echo $countryFactory->doFactory(new KyrgyzstanProduct());
    // echo "<br/><br/>";
    // echo $countryFactory->doFactory(new GermanyProduct());
  }

}

$worker=new Client();



 ?>
