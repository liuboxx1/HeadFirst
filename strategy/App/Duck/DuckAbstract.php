<?php


namespace App\Duck;

use App\DuckBehavior\Fly\FlyBehavior;
use App\DuckBehavior\Quack\QuackBehavior;

abstract class DuckAbstract
{
    /** @var FlyBehavior */
    protected FlyBehavior $flyBehavior;

    /** @var QuackBehavior */
    protected QuackBehavior $quackBehavior;

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    /**
     * @param FlyBehavior $flyBehavior
     */
    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    /**
     * @param QuackBehavior $quackBehavior
     */
    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function swim()
    {
        var_dump("All ducks float, even docoys!");
    }
}