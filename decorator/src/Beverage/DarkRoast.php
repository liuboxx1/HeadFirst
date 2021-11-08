<?php


namespace App\Beverage;


class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = "DarkRoast";
    }

    public function cost(): float
    {
        return 2.99;
    }
}