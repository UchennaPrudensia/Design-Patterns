<?php

function __autoload($class_name)
{
  include $class_name . '.php';
}

class Client
{
  public $basicSite;

  public function __construct()
  {
    $this->basicSite=new BasicSite();
    $this->basicSite=$this->wrapComponent($this->basicSite);


    $siteShow=$this->basicSite->getSite();
    $format="<br/>&nbsp;&nbsp;<strong>Total = $";
    $price=$this->basicSite->getPrice();

    echo $siteShow . $format . $price . "</strong><p/>";
  }

  private function wrapComponent(IComponent $component)
  {
    // $component=new Maintenance($component);
    // $component=new DataBase($component);
    // $component=new Video($component);

    $component=new Video(new Database(new Maintenance($component)));

    return $component;
  }

}

$worker=new Client();







 ?>