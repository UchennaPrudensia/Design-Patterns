<?php

include ('DoMath.php');
include('Math.php');

class Client {

    private $added;
    private $divided;
    private $textNum;
    private $output;


    public function __construct()
    {
        $doMath = new DoMath(); // another object aka dependency
        $math  = new Math();
        $this->added = $doMath->simpleAdd(40, 60);
        $this->divided =$doMath->simpleDivide($this->added, 25);
        $this->textNum = $math->numToText($this->divided);
        $this->output = $math->addFace("Your Results: ", $this->textNum);
        echo $this->output;
    }


}

$worker = new Client();





?>
