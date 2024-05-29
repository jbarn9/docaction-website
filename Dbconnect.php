<?php
class Dbconnect {
    private $server = 'localhost';
    private $dbname = 'docaction';
    private $user = 'root';
    private $pass = 'root';

    public function connect() {
        try {
            $db = new PDO("mysql:host=".$this->server.";dbname=".$this->dbname,$this->user,$this->pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch(PDOException $e){
            echo "Le code de l'exception est : " . $e->getMessage();
        }

    }

}
