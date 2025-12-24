<?php


class Config
{
    private static $instance = null;

    private $host = 'localhost';
    private $db_name = 'company';
    private $username = 'root';
    private $password = '';

    private $conn;

    private function __construct()
    {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name};charset=utf8",
                $this->username,
                $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


        } catch (PDOException $e) {

            die("Database connection failed: " . $e->getMessage());

        }
    }

    public static function getInstance()
    {

        if (self::$instance === null) {

            self::$instance = new Config();

        }

        return self::$instance;

    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function selectAll()
    {

        $query = "SELECT emp_id,emp_name,emp_address, emp_salary FROM employees";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt; // Returns a PDOStatement object

    }



    public function getEmployeeById($id)
    {

        $query = "SELECT emp_id, emp_name, emp_address, emp_salary
              FROM employees
              WHERE emp_id = :id
              LIMIT 1";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetch();

    }



    public function update_user($id, $name, $address, $salary)
    {

        $query = "UPDATE employees 
              SET emp_name = :name,
                  emp_address = :address,
                  emp_salary = :salary
              WHERE emp_id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':salary', $salary, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();



    }


     public function delete_user($id)
    {

        $query = "DELETE FROM employees 
              
              WHERE emp_id = :id";


        $stmt = $this->conn->prepare($query);

        
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

         $stmt->execute();



    }



}




?>