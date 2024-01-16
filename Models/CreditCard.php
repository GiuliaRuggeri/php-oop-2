<?php

class CreditCard{

    public $number;
    public $expdate;

    public function __construct($number, $expdate) {
        $this->number = $number;
        $this->expdate = $expdate;

    }

    public function ValidCard() {

        if($this->expdate < 2024){

            return false; 

        } else{
             
            return true; 
        }
        
    }
}