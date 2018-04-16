<?php
include_once("PostCreator.php");
include_once("ProductPost.php");

class ShopPostFactory extends PostCreator
{
  private $shopPost;


  protected function makePost(ProductPost $post)
  {
    $this->shopPost = $post;
    return $this->shopPost->getProperties();
  }

}


?>
