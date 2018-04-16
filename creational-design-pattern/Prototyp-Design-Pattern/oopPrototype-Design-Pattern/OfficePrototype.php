<?php


abstract class OfficePrototype
{
  protected $name;
  protected $id;
  protected $employeePic;
  protected $dept;

  //dept
  abstract function setDept($orgCode);
  abstract function getDept();

  //Name
  public function setName($emName)
  {
    $this->name = $emName;
  }

  public function getName()
  {
    return $this->name;
  }

 //ID
  public function setId($emId)
  {
    $this->id = $emId;
  }

  public function getId()
  {
    return $this->id;
  }

  //Employee Pic
  public function setPic($emPic)
  {
    $this->employeePic = $emPic;
  }

  public function getPic()
  {
    return $this->employeePic;
  }

  abstract function __clone();

}


 ?>
