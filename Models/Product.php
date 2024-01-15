<?php
 
    require_once __DIR__ . "/Category.php";

 class Product{

    public $name;
    public $price;
    public $category;

    public function __construct($name, $price, Category $category) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getProductType(){

        return get_class($this);
    }
 }