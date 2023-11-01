<?php

class Teacher{
    public $conn;
    function __construct($conn){
        $this->conn = $conn;
    }

    public function login($email , $pass){
        $query = "SELECT * FROM teachers WHERE email = ? AND password = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$email, $pass]);
        $exist = $stmt->rowCount();
        $data = $stmt->fetchAll();
        return [$exist, $data];
    }
    public function readAll(){
        $query = "SELECT * FROM subjects";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([]);
        $result = $stmt->fetchAll();
        return $result;
    }
}