<?php

class Customer{

    public $email;
    public $discount=0;
    public $card;


    public function __construct($email, $discount, CreditCard $card) {
        $this->email = $email;
        $this->discount = $discount;
        $this->card = $card;
    }
}