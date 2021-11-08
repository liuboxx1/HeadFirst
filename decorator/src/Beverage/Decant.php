<?php


namespace App\Beverage;


class Decant extends Beverage
{
    public function __construct()
    {
        $this->description = "Decant";
    }

    public function cost(): float
    {
        return 3.99;
    }
}