<?php

//extends means that everything in the Ship class is also now automatically in the RebelShip class
class RebelShip extends Ship
{
    public function getFavoriteJedi(){
        $coolJedis = array('Yoda', 'Ben Kenobi');
        $key = array_rand($coolJedis);

        return($coolJedis[$key]);
    }

    //when extending a class, you can override that classes methods. so this getType will override the Ship class' getType
    public function getType(){
        return 'Rebel';
    }

    //same thing with this method. overriding the Ship isFunctional method
    public function isFunctional(){
        return true;
    }

    public function getNameAndSpecs($useShortFormat = false){
        if($useShortFormat){
            return sprintf(
                '%s: %s/%s/%s (Rebel)',
                $this->getName(),
                $this->getWeaponPower(),
                $this->getJediFactor(),
                $this->getStrength()
            );
        }else{
            return sprintf(
                '%s: w:%s, j:%s, s:%s (Rebel)',
                $this->getName(),
                $this->getWeaponPower(),
                $this->getJediFactor(),
                $this->getStrength()
            );
        }
    }
}