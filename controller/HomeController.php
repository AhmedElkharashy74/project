<?php
class HomeController {
    public function home(){
        echo $_GET['email'];
    }
    
    public function readSubjects(){
        $db = new DataBase();
        $teacher = new Teacher($db->conn);
        $result = $teacher->readAll();
        $msg = json_encode($result);
        echo $msg;
    }
}