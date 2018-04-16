<?php


// listing 03.49
class CdProduct extends IShopProduct
{
    private $playLength;
    public function __construct(string $title, string $firstName, string $mainName,
                                float $price, int $playLength)
    {
      $this->title             = $title;
      $this->producerFirstName = $firstName;
      $this->producerMainName  = $mainName;
      $this->price             = $price;
      $this->playLength        = $playLength;
    }
     public function getProducerFirstName()
     {
       return $this->producerFirstName;
     }

     public function getProducerMainName()
     {
       return $this->producerMainName;
     }

     public function setDiscount($num)
     {
       $this->discount = $num;
     }

     public function getDiscount()
     {
       return $this->discount;
     }

     public function getTitle()
     {
       return $this->title;
     }

     public function getPrice()
     {
       return ($this->price - $this->discount);
     }

     public function getProducer()
     {
       return $this->producerMainName . " " . $this->producerFirstName;
     }

    public function getPlayLength()
    {
        return $this->playLength;
    }
    public function getSummaryLine()
    {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": playing time - {$this->playLength} seconds";
        return $base;
    }
}


 ?>
