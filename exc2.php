<?php
class Beer extends Beverages {
    var string $name;
    var float $alcoholp;

function __construct($name, $alcoholp, $color, $price, $temperature = "cold")
{
    $this->name = $name;
    $this->alcoholp = $alcoholp;
    parent::__construct($color, $price, $temperature);
}

function getAlc(){
    return $this->alcoholp;
}
}

$DuvelObj = new Beer("Duvel", 8.5, "blonde",3.5 );
var_dump($DuvelObj);

echo $DuvelObj->alcoholp;
echo "<br>";
echo $DuvelObj->getAlc();
