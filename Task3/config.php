<?php

class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "e-commerce";

    public $connection; 
   
    public function __construct() {

        try {
            $this->connection = new mysqli(
                $this->host,
                $this->user,
                $this->password,
                $this->dbName
            );

            if ($this->connection->connect_error) {
                throw new Exception("Connection failed: " . $this->connection->connect_error);
            }

            echo "Database connected successfully <br>";

        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

}
?>
