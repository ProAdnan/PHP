<?php
require 'config.php';



if ($_SERVER['REQUEST_METHOD'] != 'POST') {

    die('Err send');

}


if (isset($_POST['submit'])) {

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    $password = htmlspecialchars(trim($_POST['name']));


    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $dob = $_POST['dob'];


    $age = date_diff(date_create($dob), date_create('today'))->y;

    if ($age < 16) {
        die("Under age");
    }

    $stmt = $conn->prepare("INSERT INTO users(full_name,email,mobile,password,dob) VALUES(?,?,?,?,?)");

    $stmt->execute([$name, $email, $mobile, $password, $dob]);



}else{

    die("not submitted");
}


header("Location: login.php");

?>