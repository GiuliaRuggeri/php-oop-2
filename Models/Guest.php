<?php

require_once __DIR__  . "/Customer.php";

class Guest extends Customer{
    
    public $name;
    public $surname;

    public function __construct( $email, $name, $surname, $card) {

        parent::__construct($email, 0, $card);

        $this->name = $name;
        $this->surname = $surname;
    }
}