<?php

require_once __DIR__ . "/Product.php";

class Toy extends Product{

   public $type;

   public function __construct($name, $price, Category $category, $type) {

    $this->name = $name;
    $this->price = $price;
    $this->category = $category;
    $this->type = $type;
   }
}
