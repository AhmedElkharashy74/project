<?php

class Teacher{
    public $conn;
    function __construct($conn){
        $this->conn = $conn;
    }

    public function login($email, $pass) {
        $query = "SELECT * FROM teachers WHERE email = ? AND password = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$email, $pass]);
        
        if ($stmt->rowCount() > 0) {
            return $stmt->fetch();
        } else {
            return null;
        }
    }
    public function readAll($subject){
        $query = "SELECT * FROM subjects WHERE subject =?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$subject]);
        $result = $stmt->fetchAll();
        return $result;
    }
}