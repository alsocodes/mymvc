<?php
defined ('BASEPATH') or exit ('<script>window.history.back();</script>'); 
/*
Configurasi database
*/

class Database
{
    protected $database_server   = 'localhost';
    protected $database_user     = 'root';
    protected $database_password = '';
    protected $database_name     = '';
    protected $connection;

    public function test(){
        echo 'i am tester';
    }

    public function getConnection(){
        $this->connection = new mysqli(
            $this->database_server, 
            $this->database_user, 
            $this->database_password, 
            $this->database_name);

        // Check connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
        return $this->connection;
    }
}


