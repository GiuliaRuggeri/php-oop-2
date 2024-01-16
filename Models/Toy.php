<?php

require_once __DIR__ . "/Product.php";

class Toy extends Product{

   public $type;

   public function __construct($name, $price, Category $category, $type) {

    parent::__construct($name, $price, $category);
    $this->type = $type;
   }
}
