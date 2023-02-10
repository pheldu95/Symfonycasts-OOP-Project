<?php

class Container{
    private $configuration;

    private $pdo;

    private $shipLoader;

    private $shipStorage;

    private $battleManager;

    public function __construct(array $configuration){
        $this->configuration = $configuration;
    }
    /**
     * @return PDO
     */
    public function getPDO(){
        //make sure we only make one database connection
        //if one already exists, then it doesn't make another pdo
        if($this->pdo === null) {
            $this->pdo = new PDO(
                $this->configuration['db_dsn'],
                $this->configuration['db_user'],
                $this->configuration['db_pass']
            );
            //pdo will throw nice exceptions
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }

    /**
     * @return ShipLoader
     */
    public function getShipLoader(){
        if($this->shipLoader === null){
            $this->shipLoader = new ShipLoader($this->getShipStorage());
        }

        return $this->shipLoader;
    }

    /**
     * @return PdoShipStorage
     */
    public function getShipStorage(){
        if($this->shipStorage === null){
            $this->shipStorage = new PdoShipStorage($this->getPDO());
        }

        return $this->shipStorage;
    }

    public function getBattleManager(){
        if($this->battleManager === null){
            $this->battleManager = new BattleManager();
        }

        return $this->battleManager;
    }
}