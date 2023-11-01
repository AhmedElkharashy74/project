<?php
class HomeController {
    public function home(){
        view("home", []);
        $this->readSubjects();
    }
    
    public function readSubjects(){
        $db = new DataBase();
        $teacher = new Teacher($db->conn);
        $result = $teacher->readAll();
        $msg = json_encode($result);
        echo $msg;
    }
}