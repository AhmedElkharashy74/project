<?php

class Student{
    protected $db;
    protected $table;

    public function __construct($db){
        $this->db = $db;
    }
    
    public function getStudent($id){
        $query = $this->db->query("SELECT  FROM students WHERE ID =?");
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
    }
    public function addStudent($data){
        $query = "INSERT INTO students (email ,name ,passowrd ,grade ,department, section) VALUES (?,?,?,?,?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute($data);
    }
    public function updateStudent($id,$data){
        $query = "UPDATE students SET email = ?, name=?, password =?, grade =?, department =? section=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id,$data]);
    }
    public function deleteStudent($id){
        $query = "DELETE FROM students WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
    }
    public function get($param){
        return "this is get";

    }
    public function post($param){
        return "this is post";
        
    }
    public function createStudent($name , $email, $pass, $grade , $section){
        $query = "INSERT INTO student(name , email, password ,grade, section) VALUES(?,?,?,?,?) ";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$name, $email, $pass, $grade, $section]);
    }
    public function login($email , $pass){
        $query = "SELECT * FROM student WHERE (email = ?) AND (password = ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$email, $pass]);
        $result = $stmt->fetchAll();
        return $result;
    }
}
