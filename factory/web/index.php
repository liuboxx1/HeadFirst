<?php


include_once __DIR__ . '/../vendor/autoload.php';

use App\PizzaStore\ChicagoPizzaStore;
use App\PizzaStore\NYPizzaStore;

$nyStore = new NYPizzaStore();
$pizza = $nyStore->orderPizza("cheese");
var_dump("Ethan ordered a " . $pizza->getName());

$chicagoStore = new ChicagoPizzaStore();
$pizza = $chicagoStore->orderPizza("cheese");
var_dump("Joel ordered a " . $pizza->getName());
