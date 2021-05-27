<?php

class Beverage
{
    private static $timesServed = 0;

    public function __construct($drink)
    {
        self::$timesServed++;
        echo "Here's your ".$drink.", You had ".self::$timesServed . " drinks. <br>";
    }
}

$Cola = new Beverage("Cola");
$Beer = new Beverage("Beer");
$water = new Beverage("Water");
$pis = new Beverage("Heineken");
