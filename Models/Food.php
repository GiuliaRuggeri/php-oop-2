<?php

require_once __DIR__ . "/Product.php";

class Food extends Product
{
    public $weight;
    public $ingredients;

    public function __construct($name, $price, Category $category, $weight, $ingredients)
    {

        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }

}
