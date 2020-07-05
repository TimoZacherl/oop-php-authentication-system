<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'oop_log_mod');

class DB_con
{
    public $connection;
    public function __construct()
    {
        $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        
        if ($this->connection->connect_error) {
            die('Database error -> ' . $this->connection->connect_error);
        }
    }
    
    public function ret_obj()
    {
        return $this->connection;
    }
}
