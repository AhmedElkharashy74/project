<?php
echo "<pre>";
session_start();
// var_dump($_SESSION["data"]);
echo "</pre>";
echo "<br>";
$data = json_decode($_SESSION['data']);
echo "<pre>";
var_dump($data);
echo "</pre>";  
echo "<br>";
echo  gettype($data);
