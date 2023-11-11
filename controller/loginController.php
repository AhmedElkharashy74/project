<?php
class LoginController 
{
    public function login() {
        $pdo = new DataBase;
        // view('login', []);

        $method = $_SERVER["REQUEST_METHOD"];

        $student = new Student($pdo->conn);


        if ($method == "POST" AND isset($_POST["email"])AND $_POST['pass'] !== null) {
            session_start();
            $student = new Student($pdo->conn);
            $data = $student->login($_POST['email'], $_POST['pass']);
            if ($data != null) {
                $jsonData = json_encode($data);
                $router = new Router;
                $_SESSION['data'] = $jsonData;
                $router->redirect('/college_project/home', []);
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
        // view('login', []);

        $method = $_SERVER["REQUEST_METHOD"];

        if ($method == "POST" AND isset($_POST["email"])AND $_POST['pass'] !== null) {
            session_start();
            $teacher = new Teacher($pdo->conn);
            $data = $teacher->login($_POST['email'], $_POST['pass']);
            if ($data != null) {
                $jsonData = json_encode($data);
                $router = new Router;
                $_SESSION['data'] = $jsonData;
                $router->redirect('/college_project/home', []);
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
