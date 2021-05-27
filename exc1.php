<?php
class Beverages //create a class and give it a name
{
    //create desired variables
    var string $color;
    var float $price;
    var string $temperature;

    //create a construct to pass in information when a new instance is made. A construct will call itself each time an instance is created.
    function __construct($color, $price, $temperature = "cold"){
         $this->color = $color; //use $this to refer to this class and specify the variable.
         $this->price = $price;
         $this->temperature = $temperature;
    }

    //a class can contain certain functions that can be called. (if one needs to call a certain function multiple times, it's better to assign this inside a class).
    function getInfo(){
        return "This beverage is ". $this->temperature . " and ". $this->color.".";
    }
}

//create a new instance with parameters for the construct.
$colaObj = new Beverages("black",2);

// echo this instance function. With the function being inside the class, therese no need to give a parameter, as the functions takes this from the class.
echo $colaObj->getInfo();
echo $colaObj->temperature; //or just call one variable inside a class.

