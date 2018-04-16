<?php
/*Age group
18-29: Group 1
30-39: Group 2
40-49: Group 3
50+ :  Group 4
*/

function __autoload($class_name)
{
  include_once($class_name . ".php" );
}

class Client
{
    //$hotDate is component instance
    private $hotDate;

    public function __construct()
    {
      $this->hotDate=new Male();
      $this->hotDate->setAge("Age Group 3");
      echo $this->hotDate->getAge();
      $this->hotDate=$this->wrapComponent($this->hotDate);
      echo $this->hotDate->getFeature();
    }

    private function wrapComponent(IComponent $component)
    {
      $component=new ProgramLang($component);
      $component->setFeature("cs");   // changing states
      $component=new Hardware($component);
      $component->setFeature('dell');
      $component=new Food($component);
      $component->setFeature("veg");
      $component=new Movie($component);
      $component->setFeature("thril");
      return $component;
    }
}

$worker=new Client();



 ?>
