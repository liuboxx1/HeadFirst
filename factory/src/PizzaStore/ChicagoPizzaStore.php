<?php


namespace App\PizzaStore;


use App\Pizza\ChicagoStyleCheesePizza;

class ChicagoPizzaStore extends PizzaStore
{

    public function createPizza(string $type)
    {
        if ($type == 'cheese')
        {
            return new ChicagoStyleCheesePizza();
        }
        else
        {
            return null;
        }
    }
}