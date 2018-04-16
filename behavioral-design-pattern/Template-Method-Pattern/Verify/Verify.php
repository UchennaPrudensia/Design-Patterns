<?php

class Verify extends IVerify
{
  protected function  verifyCode()
  {
      $this->code = 6732;
      if($this->user->code == $this->code)
      {
        $this->isRightCode = true;
        return true;
      }
      else
      {
        $this->isRightCode = false;
        return false;
      }
  }



  protected function display()
  {
    if($this->isRightCode)
    {
      echo $this->user->getNames() . " is 35% verified </br>" ;
      echo $this->user->code . " is user code ";
    }
    else
    {
      echo "You entered a wrong code, Please Try Again... </br>";
    }
  }
}



 ?>
