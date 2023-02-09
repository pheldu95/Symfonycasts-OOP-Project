<?php

//this will be the most abstract version of a ship class
//meaning it will hold methods and variables and stuff that both Ship and RebelShip need.
//Ship and RebelShip will both extend this class. Instead of RebelShip extending Ship and inheriting stuff that it doesn't need
class AbstractShip
{
    private $id;
    //public means you can access the property anywhere. private means it can only be accessed inside the class
    //protected is the same as private, except subclasses, like RebelShip, can still access it
    private $name;
    //can set default value. in this case, the default value is 0 ($weaponPower = 0)
    private $weaponPower = 0;

    private $strength = 0;

    //this is a constructor. will run when a Ship object is created. must be named __construct
    public function __construct($name){
        $this->name = $name;
    }

    //a method is basically a function that lives inside a class. (like $Spider->read_url)
    public function sayHello(){
        echo'hello';
    }
    public function getName(){
        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat = false){
        if($useShortFormat){
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        }else{
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        }
    }

    public function doesGivenShipHaveMoreStrength($givenShip){
        return $givenShip->strength > $this->strength;
    }

    //this is called a setter. makes it so we can use this function to get the strength when we are outside of the ship class. since strength is private
    //makes it so we can make sure strength is a number instead of a string etc...
    public function setStrength($strength){
        if(!is_numeric($strength)){
            throw new Exception('Invalid strength passed ' . $strength);
        }
        $this->strength = $strength;
    }

    //this is a 'getter' function. similar to setter function, allows us to access strenght outside of the Ship class
    public function getStrength(){
        return $this->strength;
    }

    /**
     * @return int
     */
    public function getWeaponPower(): int
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower(int $weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}