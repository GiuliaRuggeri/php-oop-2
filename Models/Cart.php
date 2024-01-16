<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Customer.php";


class Cart {

    public $products;
    public $customer;

    public function __construct(Product $products, Customer $customer) {
        $this->products = $products;
        $this->customer = $customer;
    }

    public function Payment(){

        if($this->customer instanceof  User && $this->customer->card->ValidCard()){

            return "pagamento avvenuto con successo";

        } else if($this->customer instanceof Guest && $this->customer->card->ValidCard()){

            return "pagamento avvenuto con successo";

        }else if(!$this->customer->card->ValidCard()){

            return "carta scaduta";
        }else{
             
            return "carrello vuoto";
        }

    }

}