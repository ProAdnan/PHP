<?php

require_once 'config.php';


if ($_SERVER['REQUEST_METHOD'] != 'POST') {

    die('Err send');

}


if (isset($_POST['submit'])) {

    $name = htmlspecialchars(trim($_POST['name']));

    $address = htmlspecialchars(trim($_POST['address']));

    if (isset($_POST["salary"])) {

        if ($_POST["salary"] > 0) {

            $salary = $_POST["salary"];
        } else {
            die("Salary must be positive value");
        }


    } else {
        die("salary is important");
    }



    if (!empty($name) && !empty($address)) {

        $db = Config::getInstance();
        $pdo = $db->getConnection();

        $stmt = $pdo->prepare(
            "INSERT INTO employees (emp_name, emp_address, emp_salary) 
     VALUES (:name, :address, :salary)"
        );

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':salary', $salary, PDO::PARAM_INT);

        $stmt->execute();





        echo "<p style='color:green;'>User created successfully!</p>";
    } else {

        echo "<p style='color:red;'>Err, User not created successfully!</p>";
    }



}

header("Location: index.php");


?>