<?php

class BattleResult
{
    private $usedJediPowers;

    private $winningShip;

    private $losingShip;

    public function __construct($usedJediPowers, Ship $winningShip, Ship $losingShip){
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
     * @return Ship
     */
    public function getWinningShip(): Ship
    {
        return $this->winningShip;
    }

    /**
     * @return Ship
     */
    public function getLosingShip(): Ship
    {
        return $this->losingShip;
    }

}