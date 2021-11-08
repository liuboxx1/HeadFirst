<?php


namespace App\DuckBehavior\Quack;


class Squeak implements QuackBehavior
{

    public function quack()
    {
        var_dump("Squeak");
    }
}