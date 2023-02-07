<?php

class BattleResult
{
    private $usedJediPowers;

    private $winningShip;

    private $losingShip;

    //adding "= null" for the arguments means the argument is optional. so if it comes in as null, it won't throw an error. this would happen if the ships tie, both destroying each other
    public function __construct($usedJediPowers, Ship $winningShip = null, Ship $losingShip = null){
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    //"getters", public functions that allow us to access the private properties in this class from outside the class
    //can make them automatically in phpstorm. right click and go to Generate->Getters
    /**
     * @return boolean
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip(): Ship
    {
        return $this->winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip(): Ship
    {
        return $this->losingShip;
    }

    public function isThereAWinner(){
        return $this->getWinningShip() !== null;
    }
}