<?php
class DataBase
{
    private static $_instance;
    private $_pdo;
    protected $host = "localhost";
    protected $dbname = "college_project";
    protected $user = "root";
    protected $pass = "";
    public $conn;

    private function __construct()
    {//private constructor:
        $this->_pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);//<-- connect here
        //You set attributes like so:
        $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public static function getConnection()
    {
        if (self::$_instance === null)
        {
            self::$_instance = new DataBase();
        }
        return self::$_instance;
    }
    //to TRULY ensure there is only 1 instance
    public function __clone()
    {
        return false;
    }
    public function __wakeup()
    {
        return false;
    }
}