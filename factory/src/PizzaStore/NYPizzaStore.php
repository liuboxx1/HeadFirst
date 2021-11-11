<?php


namespace App\PizzaStore;


use App\Pizza\NYStyleCheesePizza;

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type)
    {
        if ($type == 'cheese')
        {
            return new NYStyleCheesePizza();
        }
        else
        {
            return null;
        }
    }
}