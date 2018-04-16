<?php

   function __autoload($class_name)
   {
     include $class_name . '.php';
   }

   class ClientH
   {
     //hotDate is component instance
     private $hotDate;
     private $progLang;
     private $hardware;
     private $food;
     private $movie;

     public function __construct()
     {
       $gender=$_POST['gender'];
       $age=$_POST['age'];

       $this->progLang=$_POST["progLang"];
       $this->hardware=$_POST["hardware"];
       $this->food=$_POST["food"];
       $this->movie=$_POST["movie"];

       $this->hotDate = new $gender();
       $this->hotDate->setAge($age);
       echo $this->hotDate->getAge();
       $this->hotDate=$this->wrapComponent($this->hotDate);
       echo $this->hotDate->getFeature();

     }

     private function wrapComponent(IComponent $component)
     {
        $component=new ProgramLang($component);
        $component->setFeature($this->progLang);
        $component=new Hardware($component);
        $component->setFeature($this->hardware);
        $component=new Food($component);
        $component->setFeature($this->food);
        $component=new Movie($component);
        $component->setFeature($this->movie);
        return $component;
     }
   }

   $worker=new ClientH();
 // echo "<pre>";
 //   echo var_dump($worker);
 //   echo "</pre>";


 ?>
