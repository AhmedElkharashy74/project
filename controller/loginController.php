<?php
class LoginController 
{
    public function login() {
        $pdo = new DataBase;
        // view('login', []);

        $method = $_SERVER["REQUEST_METHOD"];

        $student = new Student($pdo->conn);


        if ($method == "POST" AND isset($_POST["email"])AND $_POST['pass'] !== null) {
            $student = new Student($pdo->conn);
            $num = $student->login($_POST['email'], $_POST['pass']);
            if ($num > 0) {
                header('Location: /college_project/home?email='.$_POST['email']);

            }else{
                $msg = 'some thing went wrong';
                $json_msg = json_encode($msg);
                echo $json_msg;
            }
        }
        elseif ($method == "GET")   
        {
            view('login', []);
        }
        $pdo = null;       
    }


    public function loginTeacher(){
        $pdo = new DataBase;

        $method = $_SERVER["REQUEST_METHOD"];


        $teacher = new Teacher($pdo->conn);


        if ($method == "POST" AND isset($_POST["email"])AND $_POST['pass'] !== null) {
            $teacher = new Teacher($pdo->conn);
            $num = $teacher->login($_POST['email'], $_POST['pass']);
            if ($num > 0) {
                header('Location: /college_project/home?email='.$_POST['email']);

            }else{
                $msg = 'some thing went wrong';
                $json_msg = json_encode($msg);
                echo $json_msg;
            }
        }
        elseif ($method == "GET")   
        {
            view('login', []);
        }
        $pdo = null;  
    }
}
