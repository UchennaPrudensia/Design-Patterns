<?php
include_once('Product/ShopProductPost.php');
include_once('Factory/ShopPostFactory.php');

class Client
{
   private $postFactory;

   public function __construct()
   {
     $this->postFactory = new ShopPostFactory();
     echo $this->postFactory->doPost(new ShopProductPost('Bicycle', 'Excellent working condition', '$98'));
   }


}

$worker = new Client;



 ?>
