<?php
class RegisterController{
    public function register(){
        // view register page
        view('register', []);

        //registring
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['name']) AND $_POST['pass'] !== null AND $_POST['email'] !== null AND $_POST['grade'] !== null AND $_POST['section'] !== null) {
                //db connect
                $pdo = new DataBase;
                $student = new Student($pdo->conn);
                
                $student->createStudent($_POST['name'], $_POST['email'], $_POST['pass'], $_POST['grade'], $_POST['section']);
                
                $msg = 'student creation success';
                $json_msg = json_encode($msg);
                echo $json_msg;
                $pdo = null;
            }else{
                $msg = 'data are not completed';
                $json_msg = json_encode($msg);
                echo $json_msg;
            }
        }
    }
}