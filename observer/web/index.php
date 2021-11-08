<?php

use App\Observer\CurrentConditionDisplay;
use App\Subject\WeatherData;

include_once __DIR__ . "/../vendor/autoload.php";


$weatherData = new WeatherData();


$o1 = new CurrentConditionDisplay($weatherData);
$o2 = new CurrentConditionDisplay($weatherData);


$weatherData->setMeasurements(1, 2, 3);



$weatherData->removeObserver($o2);
$weatherData->setMeasurements(5, 6, 7);
