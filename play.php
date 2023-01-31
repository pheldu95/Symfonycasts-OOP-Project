<?php
//a class defines all the properties an object might have. The Ship class is not a ship, but defines properties one might have
class Ship
{
    public $name;
    //can set default value. in this case, the default value is 0 ($weaponPower = 0)
    public $weaponPower = 0;
    public $jediFactor = 0;
    public $strength = 0;
    //a method is basically a function that lives inside a class. (like $Spider->read_url)
    public function sayHello(){
        echo'hello';
    }
    public function getName(){
        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat){
        if($useShortFormat){
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }else{
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    public function doesGivenShipHaveMoreStrength($givenShip){
        return $givenShip->strength > $this->strength;
    }
}

function printShipSummary($someShip){
    echo 'ship name:' . $someShip->name;
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getName();
    var_dump($someShip->weaponPower);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);
}

//instantiating a new object from the Ship class
$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->weaponPower = 10;

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

printShipSummary($myShip);
echo '<hr/>';
printShipSummary($otherShip);
echo '<hr/>';

if($myShip->doesGivenShipHaveMoreStrength($otherShip)) {
    echo $otherShip->name.'has more strength';
}else{
    echo $myShip->name.'has more strength';
}