<?php

include_once('FormaterHelper.php');
include_once('Product.php');

class GermanyProduct implements Product
{
  private $mfgProduct;
  private $formatHelper;

  public function getProperties()
  {
    $this->formatHelper = new FormaterHelper();
    $this->mfgProduct = $this->formatHelper->addTop();
    $this->mfgProduct .= <<<GERMANY
    <img src='Countries/Germany.png' class='pixRight' width='600' height='304'>
    <header>GERMANY</header>
    <p>In the first centuries the Merovingian kings of Gaul conquered many German tribes,
     these Colonists of Gaul were also focused in change the religion.
     The missionary activityfunded monasteries at Würzburg, Regensburg, Reichenau,
     and other places. Many years later, from 772 to 814, the king Charlemagne
     extended his empire into northern Italy and the territories of all west of Germany,
     including Saxons and Bavarians. When Charlemagne was confirmed as emperor of Rome,
     the “Holy Roma Empire” was established. The years passed and the empire was divided
     into several parts because of the many fights between Charlemagne’s grandchildren,
     this division gave place to the beginning of the Frankish Kingdom under the government
     of Duke Henry of Saxony. The time between 1096 and 1291 was the age of the crusades
     and knightly religious orders were established: The Templars, the Knights of St. John
     and the Teutonic Order, many towns, castles, bishops’ palaces and monasteries were founded
     in this age. But from 1300 The Empire started to lose territory on all its frontiers.
      In the 15th century the king Maximilian I tried to reform the Empire but it was frustrated
      by the continued territorial fragmentation of the Empire.
   </p>
GERMANY;
    $this->mfgProduct .= $this->formatHelper->closeUp();
    return $this->mfgProduct;
  }
}





 ?>
