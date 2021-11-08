<?php


namespace App\Observer;


use App\Subject\Subject;

class CurrentConditionDisplay implements Observer
{
    private int $temperature;
    private int $humidity;
    private Subject $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(int $temperature, int $humidity, int $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        var_dump("Current conditions: {$this->temperature}, {$this->humidity}");
    }
}