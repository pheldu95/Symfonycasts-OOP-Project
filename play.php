<?php
require_once __DIR__.'/lib/Ship.php';

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