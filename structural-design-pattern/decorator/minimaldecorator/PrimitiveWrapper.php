<?php
    class PrimitiveWrap
    {
        private $wrapeMe;
        public function __construct($prim)
        {
            $this->wrapeMe=$prim;
        }
        public function showWrap()
        {
            return $this->wrapeMe;
        }
    }
    // $myPrim=521;
    // //$myPrim=568;
    // $wrappedUp=new PrimitiveWrap($myPrim);
    // echo $wrappedUp->showWrap();
    //
    // echo "<pre>";
    // echo var_dump($wrappedUp);
    // echo "</pre>";

    class Animal
    {
      public $name;

      public function __construct($name)
      {
         echo "I was in the animal contrcutor </br>";
         echo "<pre>";
         echo "Before name property is assign a new value </br>";
         echo var_dump($this);
         echo "</pre>";
         $this->name = $name->name;
         echo "</br></br>";
         echo "<pre>";
         echo "After name property from the animal class is assign the value 4rm object mad by insect class  </br>";
         echo var_dump($this);
         echo "</pre>";
      }

      public function getName()
      {
        return $this->name;
      }
    }

      class Insects extends Animal
      {
        public function __construct($properyValue)
        {
          echo "</br></br></br></br>";
          echo "I am in the insect contrcutor </br>";
          $name4rmInsectObj = $this->name = $properyValue;
          echo $name4rmInsectObj . " -echoing varibale container 4rm insect object. </br>";
          echo "<pre>";
          echo "After name property from the insect class is assign the Property value </br>";
          echo var_dump($this);
          echo "</pre>";
          echo $this->getName() . " - echo coming from the getName function of the Insect Class</br>";
        }
      }


    //$fineInsect = new Insects('Mosquitoes');

    $worker = new Animal(new Insects('Fly'));
    echo $worker->getName();
    echo "<pre>";
    echo var_dump($worker);
    echo "</pre>";













    ?>
