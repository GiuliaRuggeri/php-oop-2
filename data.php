<?php

require_once __DIR__ . "/Models/Bed.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Toy.php";

$Dog = new Category("Dog product", "dog.png");
$Cat = new Category("Cat product", "cat.png");

$Products = [

    new Food("Croccantini gusto manzo", 20.00, $Dog, "5kg", "manzo" ),
    new Food("Croccantini gusto pesce", 25.00, $Cat, "5kg", "pesce" ),
    new Bed("Cuccia per cani taglia grande", 50.00, $Dog, "80cm"),
    new Bed("Cuccia per gatti", 45.00, $Cat, "30cm"),
    new Toy("Osso di gomma", 5.00 , $Dog, "giocattoli in plastica"),
    new Toy("Tiragraffi", 10.00, $Cat, "giocattoli in tessuto"),

];
