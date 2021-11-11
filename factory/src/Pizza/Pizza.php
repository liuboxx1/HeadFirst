<?php


namespace App\Pizza;


class Pizza
{
    public string $name;
    public string $dough;
    public string $sauce;
    public array $toppings = array();


    public function prepare()
    {
        var_dump("准备{$this->name}");
        var_dump("Tossing dough...");
        var_dump("Adding sauce");
        var_dump("Adding toppings: ");
        foreach ($this->toppings as $topping)
        {
            var_dump('    ' . $topping);
        }
    }

    public function bake()
    {
        var_dump('烘焙中, 大约25分钟...');
    }

    public function cut()
    {
        var_dump('切块...');
    }

    public function box()
    {
        var_dump('装盒...');
    }

    public function getName(): string
    {
        return $this->name;
    }
}