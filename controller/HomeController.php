<?php
class HomeController {
    public function home(){
        view("home", []);
        // print_r($_SESSION['data']);
        $data = json_decode($_SESSION['data']);
        // print_r($data);
        if (property_exists($data,'subject')) {
            $this->teacherReadSubjects($data->subject);
        }else{
            $this->readSubjects();
        }
    }
    
    public function teacherReadSubjects($subject){

        $db = new DataBase();
        $teacher = new Teacher($db->conn);
        $result = $teacher->readAll($subject);
        $data = json_encode($result);
        // print_r($data);
    }
    public function readSubjects(){
        $db = new DataBase();
        $student = new Student($db->conn);
        $data = json_decode($_SESSION['data']);
        $subjects = $student->showSubjects($data->grade , $data->department);
        $_SESSION['subjects'] = $subjects;
    }
}