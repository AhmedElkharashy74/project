<?php
    function login() {
        $pdo = DataBase::getConnection();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        view('login', []);  
        }elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            var_dump($_POST);
            $student = new Student($pdo);
            echo $student->login();
            echo $_SERVER['REQUEST_METHOD'];
            $pdo = null;       
    
    }
} 
