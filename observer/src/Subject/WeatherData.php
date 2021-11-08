<?php


namespace App\Subject;


use App\Observer\Observer;

class WeatherData implements Subject
{
    private array $observers = array();
    private int $temperature;
    private int $humidity;
    private int $pressure;

    public function registerObserver(Observer $o)
    {
        $this->observers[] = $o;
    }

    public function removeObserver(Observer $o)
    {
        $i = array_search($o, $this->observers);
        if ($i !== false)
        {
            unset($this->observers[$i]);
        }
    }

    public function notifyObserver()
    {
        /** @var Observer $observer */
        foreach ($this->observers as $observer)
        {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    private function measurementsChanged()
    {
        $this->notifyObserver();
    }

    public function setMeasurements(int $temperature, int $humidity, int $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}