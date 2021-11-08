<?php


namespace App\DuckBehavior\Quack;


class MuteQuack implements QuackBehavior
{

    public function quack()
    {
        var_dump("Silence");
    }
}