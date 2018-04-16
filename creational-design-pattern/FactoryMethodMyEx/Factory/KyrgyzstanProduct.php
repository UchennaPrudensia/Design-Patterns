<?php

include_once('FormaterHelper.php');
include_once('Product.php');

class KyrgyzstanProduct implements Product
{
  private $mfgProduct;
  private $formatHelper;
  private $countryText;

  public function getProperties()
  {
    $this->countryText = file_get_contents("CountryText/Kyrgyzstan.txt");
    $this->formatHelper = new FormaterHelper();
    $this->mfgProduct = $this->formatHelper->addTop();
    $this->mfgProduct .= " <img src='Countries/Kyrgyzstan.png' class='pixRight'
                        width='600' height='304'>";
    $this->mfgProduct .= "<header>Kyrgyzstan</header>";
    $this->mfgProduct .= "<p>$this->countryText</p>";

    $this->mfgProduct .= $this->formatHelper->closeUp();
    return $this->mfgProduct;
  }
}





 ?>
