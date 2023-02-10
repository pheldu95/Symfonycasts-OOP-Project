<?php

//an interface acts just like an abstract class that requires these two methods below
//basically an abstract class with no functionality. only contains abstract functions
interface ShipStorageInterface
{
    /**
     * Returns an array of ship arrays, with keys id, name, weaponPower, defense
     * @return array
     */
    function fetchAllShipsData();

    /**
     * @param integer $id
     * @return array()
     */
    function fetchSingleShipData($id);
}