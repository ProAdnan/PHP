<?php
require 'config.php';

$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");

$stmt->execute([$_POST['email']]);

$user = $stmt->fetch();

if ($user && password_verify($_POST['password'], $user['password'])) {

    $_SESSION['user'] = $user;

    $conn->prepare("UPDATE users SET last_login=NOW() WHERE id=?")->execute([$user['id']]);


    header("Location: welcome.php");

} else {

    echo "Invalid login";

}

?>