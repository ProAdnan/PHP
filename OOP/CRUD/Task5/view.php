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



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1> <?php htmlspecialchars($employee['emp_name']) ?> Profile</h1>

<br>


<p><strong>ID:</strong> <?= $employee['emp_id'] ?></p>
<p><strong>Name:</strong> <?= htmlspecialchars($employee['emp_name']) ?></p>
<p><strong>Address:</strong> <?= htmlspecialchars($employee['emp_address']) ?></p>
<p><strong>Salary:</strong> <?= $employee['emp_salary'] ?></p>
    

<br>

<a href="index.php">Back</a>

</body>
</html>