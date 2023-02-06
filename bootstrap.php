<?php
require_once __DIR__.'/lib/Ship.php';
require_once __DIR__.'/lib/BattleManager.php';
require_once __DIR__.'/lib/ShipLoader.php';
require_once __DIR__.'/lib/BattleResult.php';
require_once __DIR__.'/lib/Container.php';

//all our database credentials. need them in index.php so we can pass them to ShipLoader
$configuration = array(
    'db_dsn' => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => ''
);