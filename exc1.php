<?php
class Beverages
{
    var string $color;
    var float $price;
    var string $temperature;

    function __construct($color, $price, $temperature = "cold"){
         $this->color = $color;
         $this->price = $price;
         $this->temperature = $temperature;
    }

    function getInfo(){
        return "This beverage is ". $this->temperature . " and ". $this->color.".";
    }
}


$colaObj = new Beverages("black",2);

echo $colaObj->getInfo();
echo $colaObj->temperature;

