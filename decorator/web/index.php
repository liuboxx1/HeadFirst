<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\Beverage\DarkRoast;
use App\Beverage\Espresso;
use App\Condiment\Mocha;


//$beverage = new Espresso();
//var_dump($beverage->getDescription() . " $" . $beverage->cost());


$beverage2 = new DarkRoast();
var_dump($beverage2->getDescription() . " $" . $beverage2->cost());
// 加点调料
$beverage2 = new Mocha($beverage2);
var_dump($beverage2->getDescription() . " $" . $beverage2->cost());
// 再加点调料
$beverage2 = new Mocha($beverage2);
var_dump($beverage2->getDescription() . " $" . $beverage2->cost());
// 再加点调料
$beverage2 = new Mocha($beverage2);
var_dump($beverage2->getDescription() . " $" . $beverage2->cost());