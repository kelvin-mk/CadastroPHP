<?php

include '../Persistence/ConnectionDB.php';

class acess_nvlDAO {
    private $connection = null;

    public function __construct(){
        $this->connection = ConnectionDB::getInstance();
    }
}