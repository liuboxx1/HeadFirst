<?php


namespace App\Subject;


use App\Observer\Observer;

interface Subject
{
    public function registerObserver(Observer $o);

    public function removeObserver(Observer $o);

    public function notifyObserver();
}