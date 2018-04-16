<?php

abstract class IVerify
{
  protected $user;
  protected $code;
  protected $isRightCode;
  protected $userArray;

  public function templateMethod(IUser $userNow)
  {
    $this->user = $userNow;
    // $this->userArray = $userArrayNow;
    // foreach ($this->userArray as $user)
    // {
    //   $this->user = $user;
    //   $this->verifyCode();
    //   $this->display();
    // }

    $this->verifyCode();
    $this->display();


  }
  protected abstract function  verifyCode();
  protected abstract function display();
}

 ?>
