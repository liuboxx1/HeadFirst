<?php


namespace App\DuckBehavior\Quack;


class Quack implements QuackBehavior
{

    public function quack()
    {
        var_dump("Quack");
    }
}