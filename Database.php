<?php

include 'config/connection.php';

class Database
{
    private $host = DB_HOST;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $db = DB_DATABASE;
    public $connection = '';

    public function __construct()
    {
        $this->connection = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->db
        );

        if ($this->connection->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->connection->connect_error;
            exit();
        }
    }
}