<?php

require_once 'DatabaseMySQLi.php';


if ($_SERVER['REQUEST_METHOD'] != 'POST') {

    die('Err');

}


if (isset($_POST['submit'])) {

    $name = htmlspecialchars(trim($_POST['name']));

    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    $message = htmlspecialchars(trim($_POST['message']));



    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $db = DatabaseMySQLi::getInstance()->getConnection();



        $stmt = $db->prepare(
            "INSERT INTO contacts (con_name, con_email, con_message) VALUES (?, ?, ?)"
        );

        $stmt->bind_param("sss", $name, $email, $message);
        $stmt->execute();


        echo "<p style='color:green;'>User created successfully!</p>";
    } else {

        echo "<p style='color:red;'>Err, User not created successfully!</p>";
    }


}








?>