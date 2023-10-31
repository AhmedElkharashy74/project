<?php
require_once("controller/view.php");
require_once 'model/Router.php'; 
require_once 'model/Student.php'; 
require_once 'model/Teacher.php'; 
require_once 'model/Database.php';
require_once 'controller/loginController.php';
require_once 'controller/registerController.php';
require_once 'controller/HomeController.php';


$router = new Router();


$router->add('/college_project/teacher_login', 'LoginController@loginTeacher'); 
$router->add('/college_project/', 'LoginController@login'); 
$router->add("/college_project/register" ,'RegisterController@register'); 
$router->add("/college_project/home" ,'HomeController@home'); 
$router->add("/college_project/home" ,'HomeController@readSubjects'); 





$uri = $_SERVER['REQUEST_URI'];
// echo $uri;

$router->dispatch($uri);

$arr = [1,2 , "mewo", true, 0, null];
