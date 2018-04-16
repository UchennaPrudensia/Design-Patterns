<?php
//Decorator participant

// we implement the setAge and getAge so that we dont have to
//implement it again in all the concerete decorators...
//the age of the date are not going to change...
abstract class Decorator extends IComponent
{
  public function setAge($ageNow)
  {
    $this->ageGroup = $this->ageGroup; // why not ageNow: the passed parameter
  }

  public function getAge()
  {
    return $this->ageGroup;
  }
}



 ?>
