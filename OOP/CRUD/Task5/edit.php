<?php

require_once 'config.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('Invalid employee ID');
}


$id = (int) $_GET['id'];


$db = Config::getInstance();

$employee = $db->getEmployeeById($id);


if (!$employee) {
    die('Employee not found');
}

if ($_SERVER['REQUEST_METHOD'] = 'POST') {



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


            $db->update_user($id, $name, $address, $salary);

            header("Location: index.php");


        }


    }



} else {

    die('Err sending data');


}




?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit <?= htmlspecialchars($employee['emp_name']) ?> Data </h1>

    <form method="POST">

        Name:
        <input type="text" name="name" value="<?= htmlspecialchars($employee['emp_name']) ?>">

        <br>
        Address:
        <input type="text" name="address" value="<?= htmlspecialchars($employee['emp_address']) ?>">

        <br>
        salary:
        <input type="number" name="salary" value="<?= $employee['emp_salary'] ?>">


        <input type="submit" name="submit" value="submit">
    </form>


</body>

</html>


