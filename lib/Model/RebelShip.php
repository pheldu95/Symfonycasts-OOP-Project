<?php

//extends means that everything in the Ship class is also now automatically in the RebelShip class
class RebelShip extends Ship
{
    public function getFavoriteJedi(){
        $coolJedis = array('Yoda', 'Ben Kenobi');
        $key = array_rand($coolJedis);

        return($coolJedis[$key]);
    }
}