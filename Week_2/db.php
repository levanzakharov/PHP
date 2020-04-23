<?php

class Db{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "web_api";
    public $conn;


    function __construct(){
        try {
            $conn = new PDO("mysql:host=$this->$servername;dbname=$this->$dbname", $this->$username, $this->$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
    }

    function connection(){
        return $conn;
    }
}
?>