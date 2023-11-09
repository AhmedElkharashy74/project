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
                $_SESSION['name'] = $jsonData;
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

        $method = $_SERVER["REQUEST_METHOD"];


        $teacher = new Teacher($pdo->conn);


        if ($method == "POST" AND isset($_POST["email"])AND $_POST['pass'] !== null) {
            $teacher = new Teacher($pdo->conn);
            $result = $teacher->login($_POST['email'], $_POST['pass']);
            $num = $result[0];
            $data = $result[1];
            $jsonEncodedData = json_encode($data);
            $urlEncodedData = urlencode($jsonEncodedData);

            if ($num > 0) {
                header('Location: /college_project/home?data='.$urlEncodedData);

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
