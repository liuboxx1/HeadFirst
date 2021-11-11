<?php


namespace App\PizzaStore;


use App\Pizza\Pizza;

abstract class PizzaStore
{

    public function orderPizza(string $type): Pizza
    {
        /** @var Pizza $pizza */
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }


    abstract public function createPizza(string $type);

}