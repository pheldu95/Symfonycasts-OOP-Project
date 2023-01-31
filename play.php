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
}

//instantiating a new object from the Ship class
$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->weaponPower = 10;

echo 'ship name:' . $myShip->name;
echo '<hr/>';
$myShip->sayHello();
echo '<hr/>';
echo $myShip->getName();
var_dump($myShip->weaponPower);