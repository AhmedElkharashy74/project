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
                view('home', ['email'=> $_POST['email']]);
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
