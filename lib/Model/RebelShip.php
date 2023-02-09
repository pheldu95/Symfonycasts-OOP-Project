<?php

//extends means that everything in the Ship class is also now automatically in the RebelShip class
class RebelShip extends AbstractShip
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
        //using parent:: instead of $this-> so we call the parent function instead of this function, which would cause an endless loop
        $val = parent::getNameAndSpecs($useShortFormat);
        $val .= ' (Rebel)';

        return $val;
    }

    //the jedi power of rebel ships will change randomly
    public function getJediFactor(): int
    {
        return rand(10, 30);
    }
}