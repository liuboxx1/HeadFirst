<?php


namespace App\DuckBehavior\Fly;


class FlyNoWay implements FlyBehavior
{

    public function fly()
    {
        var_dump("I can't fly");
    }
}