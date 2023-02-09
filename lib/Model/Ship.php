<?php
//a class defines all the properties an object might have. The Ship class is not a ship, but defines properties one might have

class Ship extends AbstractShip
{
    private $jediFactor = 0;
    private $underRepair;

    //overrides the AbstractShip construct function
    public function __construct($name)
    {
        parent::__construct($name);

        //ship has 30% chance to be broken
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    /**
     * @return int
     */
    public function getJediFactor(): int
    {
        return $this->jediFactor;
    }
    /**
     * @param int $jediFactor
     */
    public function setJediFactor(int $jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }

    public function isFunctional(){
        return !$this->underRepair;
    }

    public function getType(){
        return 'Empire';
    }
}