<?php


namespace App\Observer;


use App\Subject\Subject;

interface Observer
{
    public function update(int $temp, int $humidity, int $pressure);

    public function display();
}