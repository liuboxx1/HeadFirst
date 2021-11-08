<?php

include_once __DIR__ . '/../vendor/autoload.php';

use App\Duck\MallardDuck;
use App\Duck\ModelDuck;
use App\DuckBehavior\Fly\FlyNoWay;
use App\DuckBehavior\Quack\MuteQuack;
use App\DuckBehavior\Quack\Quack;
use App\DuckBehavior\Fly\FlyWithWings;

$duck = new MallardDuck();

$duck->setQuackBehavior(new Quack());
$duck->setFlyBehavior(new FlyWithWings());

$duck->performQuack();
$duck->performFly();
$duck->swim();


$duck = new ModelDuck();
$duck->setQuackBehavior(new MuteQuack());
$duck->setFlyBehavior(new FlyNoWay());

$duck->performQuack();
$duck->performFly();
$duck->swim();