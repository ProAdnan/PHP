<?php



try {
    $conn = new PDO("mysql:host=localhost;dbname=auth_system", "root", "");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


} catch (PDOException $e) {

    die("Database connection failed: " . $e->getMessage());

}



session_start();



?>