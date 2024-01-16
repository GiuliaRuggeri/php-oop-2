<?php

require_once __DIR__ . "/Product.php";

class Bed extends Product {

    public $width;

    public function __construct($name, $price, Category $category, $width) {

        parent::__construct($name, $price, $category);
        $this->width = $width;
    }
}