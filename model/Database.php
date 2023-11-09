<?php
class DataBase {

protected $host = "localhost";
protected $dbname = "project";
protected $user = "root";
protected $pass = "";
public $conn;

function __construct() {

    try {

        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {

        echo $e->getMessage();
    }
}

public function closeConnection() {

    $this->conn = null;
}
}