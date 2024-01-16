<?php

require_once __DIR__ . "/Customer.php";

class User extends Customer{

  
    public $username; 
    public $password;

    public function __construct($email, $username, $password, $card) {

        parent::__construct($email, 20, $card);

        $this->username = $username;
        $this->password = $password;
    }
}