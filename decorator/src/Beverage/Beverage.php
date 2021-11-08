<?php


namespace App\Beverage;

abstract class Beverage
{
    public string $description = "Uknown Beverage";

    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function cost();
}