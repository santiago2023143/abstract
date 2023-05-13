<?php

abstract class Database
{
    public $conn;
    public $servername = "localhost";
    public $username = "root";
    public $db = "wilbert";
 
    public function __construct($conn)
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
        $db = "CREATE DATABASE IF NOT EXISTS $this->db";
        var_dump($this->conn);
    } 
    abstract public function insert() : string;
    
}
   

?>