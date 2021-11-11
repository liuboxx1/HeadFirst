<?php


namespace App\Pizza;


class ChicagoStyleCheesePizza extends Pizza
{
    public string $name = 'Chicago Style Deep Dish Cheese Pizza';
    public string $dough = "Extra Thick Crust Dough";
    public string $sauce = "Plum Tomato Sauce";
    public array $toppings = array("Shredded Mozzarella Cheese");

    public function cut()
    {
        var_dump("切成四块...");
    }
}