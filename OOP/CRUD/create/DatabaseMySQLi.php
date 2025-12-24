<?php




$_ENV["localhost"] = "localhost";

$_ENV['root'] = 'root';

$_ENV['pass'] = "";

$_ENV['users'] = 'users';

class DatabaseMySQLi
{
    private static $instance = null;
    private $conn;



    private function __construct()
    {
        $this->conn = new mysqli(
            $_ENV['localhost'],
            $_ENV['root'],
            $_ENV['pass'],
            $_ENV['users']
        );

        if ($this->conn->connect_error) {
            die("Database connection failed");
        }
    }



    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new DatabaseMySQLi();
        }
        return self::$instance;
    }


    public function getAllUsers()
    {
        $result = $this->conn->query("SELECT * FROM users");

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return "false";
        }





    }


    public function getConnection()
    {
        return $this->conn;
    }


}

