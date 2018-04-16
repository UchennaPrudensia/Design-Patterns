<?php

//component interface

abstract class IComponent
{
  protected $site;
  abstract public function getSite();
  abstract public function getPrice();
}

 ?>
