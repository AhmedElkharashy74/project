<?php

class Student{
    protected $db;

    public function __construct($db){
        $this->db = $db;
    }
    
    public function getStudent($id){
        $query = $this->db->query("SELECT  FROM student WHERE ID =?");
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
        $query = "INSERT INTO students(name , email, password ,grade, section) VALUES(?,?,?,?,?) ";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$name, $email, $pass, $grade, $section]);
    }
    public function login($email, $pass) {
        $query = "SELECT * FROM students WHERE email = ? AND password = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$email, $pass]);
        
        if ($stmt->rowCount() > 0) {
            return $stmt->fetch();
        } else {
            return null;
        }
    }

    public function showSubjects($grade,$department){
        $query = "SELECT * FROM subjects WHERE grade = ? AND department = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$grade, $department]);
        return $stmt->fetchAll();
    }
    
    public function readSubject($name ,$grade , $department){
        $query = "SELECT * FROM subjects WHERE subject = ? AND grade = ? AND department = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$name, $grade, $department]);
        $subject = $stmt->fetch();
        $sql = "SELECT * FROM content WHERE subject = ?";
        $state = $this->db->prepare($sql);
        $state->execute([$name]);
        $content = $state->fetchAll();
        return [$subject,$content];
    }
    public function readContent($subject){
        $query = "SELECT * FROM content WHERE subject = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$subject]);
        return $stmt->fetchAll();
    }
}
