<?php
class Beer2 { //public properties are in some cases good, but most of the time it aint good because anyone can change them. It's dangerous because the code can be easily messed up this way.
    private string $name;// making them private is the solution. But you can only access them inside the class.
    private float $alcoholp; //access them outside the class will need a get or set function.
    private string $color;
    private float $price;
    private string $temperature;

    /**
     * @param string $name
     */
    public function setName(string $name): void  //set function to change the value
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string //set function to get the value
    {
        return $this->name;
    }

    /**
     * @param float $alcoholp
     */
    public function setAlcoholp(float $alcoholp): void
    {
        $this->alcoholp = $alcoholp;
    }

    /**
     * @return float
     */
    public function getAlcoholp(): float
    {
        return $this->alcoholp;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    public function __construct($name, $alcoholp, $color, $price, $temperature = "cold"){
        echo $this->name = $name;
        echo "<br>";
        echo $this->alcoholp = $alcoholp;
        echo "<br>";
        echo $this->color = $color;
        echo "<br>";
        echo $this->price = $price;
        echo "<br>";
        echo $this->temperature = $temperature;
    }

    function beerInfo(){
        return "Hi i'm" .$this->getName(). "and have an alcohol percentage of " .$this->getAlcoholp(). " and I have a ".$this->getColor()." color.";
    }


}

$DuvelObj = new Beer2("Duvel", 8.5, "blonde", 3.5);


//with the set and get we can acces them now outside the class, we can change the value even. If you don't use a validation for the set func then setting it to private is mobbing with the crane open.
$DuvelObj->setName("Duvel");
$DuvelObj->setAlcoholp(8.5);
$DuvelObj->setColor("Light");
$DuvelObj->setPrice(3.5);

echo $DuvelObj->getName()."<br>";
echo $DuvelObj->getAlcoholp()."<br>";
echo $DuvelObj->getColor()."<br>";
echo $DuvelObj->getPrice();

echo "<br>";
echo $DuvelObj->beerInfo();



