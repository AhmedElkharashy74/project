<?php 

class SubjectsController{
    public function subjects(){
        session_start();
        view('subjects', []);
        $db = new DataBase();

        $student = new Student($db->conn);
        if ($_SERVER['REQUEST_METHOD'] == 'GET' AND !empty($_SESSION) AND empty($_GET['subject']) ) {
            $data = json_decode($_SESSION['data']);
            $subjects = $student->showSubjects($data->grade, $data->department);
            print_r($subjects);
            echo '<br>';
        }
        if ($_SERVER["REQUEST_METHOD"] == "GET"AND !empty($_GET['subject']) AND !empty($_SESSION)) {
            $data = json_decode($_SESSION['data']);
            if ($_GET['grade'] == $data->grade AND $_GET['department'] == $data->department) {
                $subjectData = $student->readSubject($_GET['subject'], $_GET['grade'] , $_GET['department']);
                $content = $student->readSubject($subjectData[0][1], $_GET['grade'],$_GET['department'] );
                

                $_SESSION['content'] = $content[1];
            }else{
                echo "not allowed";
            }
            
        }
        // var_dump($student->showSubject('1', 'prep'));
    }
}