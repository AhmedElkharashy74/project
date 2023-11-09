<?php 

class SubjectsController{
    public function subjects(){
        session_start();
        view('subjects', []);
        $db = new DataBase();

        $student = new Student($db->conn);
        if ($_SERVER['REQUEST_METHOD'] == 'GET' AND !empty($_SESSION) ) {
            $data = json_decode($_SESSION['data']);
            echo "<pre>";
            $subjects = $student->showSubject($data[0]->grade, $data[0]->department);
            var_dump($subjects);
        }
        // var_dump($student->showSubject('1', 'prep'));
    }
}