<?php

require_once __DIR__ . "/Product.php";

class Bed extends Product {

    public $width;

    public function __construct($name, $price, Category $category, $width) {

        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->width = $width;
    }
}