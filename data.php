<?php

require_once __DIR__ . "/Models/Bed.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Toy.php";
require_once __DIR__ . "/Models/Guest.php";
require_once __DIR__ . "/Models/User.php";
require_once __DIR__ . "/Models/Cart.php";
require_once __DIR__ . "/Models/CreditCard.php";

$Dog = new Category("Dog product", "dog.png");
$Cat = new Category("Cat product", "cat.png");

$Products = [

    new Food("Croccantini gusto manzo", 20.00, $Dog, "5kg", "manzo"),
    new Food("Croccantini gusto pesce", 25.00, $Cat, "5kg", "pesce"),
    new Bed("Cuccia per cani taglia grande", 50.00, $Dog, "80cm"),
    new Bed("Cuccia per gatti", 45.00, $Cat, "30cm"),
    new Toy("Osso di gomma", 5.00, $Dog, "giocattoli in plastica"),
    new Toy("Tiragraffi", 10.00, $Cat, "giocattoli in tessuto"),

];

$CreditCard1 = new CreditCard("7856 1454 3210 2156", 2028);
$CreditCard2 = new CreditCard("3210 4587 0900 7610", 2021);

$Customers = [
    new Guest("mariorossi@gmail.com", "Mario", "Rossi", $CreditCard1),
    new User("janedoe@hotmail.com", "JDoe", "jd211290", $CreditCard2),
    new Guest("johndoe@yahoo.it", "John", "Doe", $CreditCard1)

];

$Carts = [
    new Cart($Products[0], $Customers[1]),
    new Cart($Products[3], $Customers[0]),
    new Cart($Products[4], $Customers[2]),


];
