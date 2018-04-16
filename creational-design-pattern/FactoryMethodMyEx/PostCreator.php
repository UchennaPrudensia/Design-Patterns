<?php

abstract class PostCreator
{

  //return a post of product type. Will be hinted in the client.
  abstract protected function makePost(ProductPost $post);

  public function doPost($postNow)
  {
    $post = $postNow;
    $returnPost = $this->MakePost($post);
    return $returnPost;
  }

}


 ?>
