<?php


namespace App\DuckBehavior\Fly;


class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        var_dump("I'm flying!!!");
    }
}