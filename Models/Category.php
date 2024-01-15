<?php

class Category
{
    public $description;
    public $photo;

    public function __construct($description, $photo) {
        $this->description=$description;
        $this->photo=$photo;
    }
}
