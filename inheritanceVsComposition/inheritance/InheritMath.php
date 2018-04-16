<?php

include_once('DoMath.php');

class InheritMath extends DoMath
{
    private $textOut;
    private $fullFace;
    
    public function NumToText($num)
    {
        $this->textOut = (string)$num;
        return $this->textOut;
    }
    
    public function addFace($face, $msg)
    {
        $this->fullFace = "<strong>" . $face . "</strong>: " . $msg;
        return $this->fullFace;
    }
}









?>