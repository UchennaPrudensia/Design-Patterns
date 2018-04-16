<?php


abstract class IShopProduct
{
    private   $title;
    private   $producerMainName;
    private   $producerFirstName;
    protected $price;
    private   $discount = 0;

   abstract public function getProducerFirstName();

   abstract public function getProducerMainName();

   abstract public function setDiscount($num);

   abstract public function getDiscount();

   abstract public function getTitle();

   abstract public function getPrice();

   abstract public function getProducer();

   public function getSummaryLine()
    {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}




?>
