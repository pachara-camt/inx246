<?php
require_once __DIR__ . '/Runnable.php';

class Person implements Runnable
{
    protected $name;
    private $distance;
    
    function __construct($name)
    {
        $this->name = $name;
        $this->distance = 0;
    }
    
    function runningDistance()
    {
        return $this->distance;
    }

    function runFor($km)
    {
        $this->distance += $km;
        return true;
    }
}
