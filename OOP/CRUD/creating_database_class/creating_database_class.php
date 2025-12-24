<?php
class Database
{
    private static $instance = null;
    private $conn;

    private function __construct()
    {
        $this->conn = new mysqli(
            $_ENV['localhost'],
            $_ENV['root'],
            $_ENV[''],
            $_ENV['users']
        );

        if ($this->conn->connect_error) {
            die("Database connection failed");
        }
    }






    public function getAllUsers()
    {
        $result = $this->conn->query("SELECT * FROM users");

        if ($result ->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return "false";
        }





    }


}


$obj = new Database();


