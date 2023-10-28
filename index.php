<?php
require_once("controller/view.php");
require_once 'model/Router.php'; 
require_once 'model/Student.php'; 
require_once 'model/Database.php';
require_once 'controller/loginController.php';


$router = new Router();



$router->add('/college_project/', 'loginController@login'); // 


$uri = $_SERVER['REQUEST_URI'];
echo $uri;

$router->dispatch($uri);
