<?php

class Beverage
{
    private static $timesServed = 0;

    public function __construct($drink)
    {
        self::$timesServed++; //add 1 for each time the construct is called (each time a new instance is made)
        echo "Here's your ".$drink.", You had ".self::$timesServed . " drinks. <br>";
    }
}

$Cola = new Beverage("Cola");
$Beer = new Beverage("Beer");
$water = new Beverage("Water");
$pis = new Beverage("Heineken");
